<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ApiController extends Controller
{
    public function getBooks()
    {
        $books = Book::with(['authors:id,name', 'warehouse'])->get();

        return response()->json($books);
    }

    public function getAuthorsWithoutBooks()
    {
        $authorsWithoutBooks = Author::doesntHave('books')->get();

        return response()->json($authorsWithoutBooks);
    }

    public function getAuthorsWithMoreThanThreeBooks()
    {
        return Author::has('books', '>', 3)->get();
    }

    public function getUserLastReceivedBook($id)
    {
        $userLastReceivedBook = User::leftJoin('orders', 'users.id', '=', 'orders.user_id')
            ->leftJoin('books', 'books.id', '=', 'orders.book_id')
            ->where('users.id', $id)
            ->latest('orders.created_at')
            ->select(
                'users.id',
                'users.first_name',
                'users.last_name',
                'users.email',
                'books.name as last_book_name',
                'books.short_name as last_book_description'
            )->first();

        if (!$userLastReceivedBook) {
            return response()->json([
                'message' => 'User not found'
            ], 404);
        }

        return response()->json($userLastReceivedBook);
    }


    public function getUsersWithBooks()
    {
        $usersWithBooks = User::join('orders', 'users.id', '=', 'orders.user_id')
            ->join('books', 'orders.book_id', '=', 'books.id')
            ->whereNull('orders.return_at')
            ->select(
                'users.id',
                'users.first_name',
                'users.last_name',
                'users.email',
                'books.id as book_id',
                'books.name as book_name',
                'books.short_name as book_description'
            )->get();

        return response()->json($this->transformArray($usersWithBooks));
    }

    protected function transformArray(Collection $usersWithBooks): array
    {
        $users = [];

        foreach ($usersWithBooks as $user) {
            $userId = $user['id'];

            if (!isset($users[$userId])) {
                $users[$userId] = [
                    'id' => $userId,
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'email' => $user['email'],
                    'book_count' => 0,
                    'books' => []
                ];
            }

            $users[$userId]['books'][] = [
                'book_id' => $user['book_id'],
                'book_name' => $user['book_name'],
                'book_description' => $user['book_description']
            ];

            $users[$userId]['book_count']++;
        }

        return [
            'users' => array_values($users)
        ];
    }
}
