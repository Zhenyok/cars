<?php

declare(strict_types=1);

namespace App\Task2;

use Generator;

/**
 * Class BooksGenerator
 * @package App\Task2
 */
class BooksGenerator
{

    /**
     * @var int
     */
    protected int $minPagesNumber;

    /**
     * @var array
     */
    protected array $libraryBooks = [];

    /**
     * @var int
     */
    protected int $maxPrice;

    /**
     * @var array
     */
    protected array $storeBooks = [];

    /**
     * BooksGenerator constructor.
     * @param int $minPagesNumber
     * @param array $libraryBooks
     * @param int $maxPrice
     * @param array $storeBooks
     */
    public function __construct(
        int $minPagesNumber,
        array $libraryBooks,
        int $maxPrice,
        array $storeBooks
    ) {
        $this->minPagesNumber = $minPagesNumber;
        $this->libraryBooks = $libraryBooks;
        $this->maxPrice = $maxPrice;
        $this->storeBooks = $storeBooks;
    }

    /**
     * @return Generator
     */
    public function generate(): Generator
    {
        foreach ($this->libraryBooks as $book) {
            if ($book->getPagesNumber() >= $this->minPagesNumber) {
                yield $book;
            }
        }

        foreach ($this->storeBooks as $book) {
            if ($book->getPrice() <= $this->maxPrice) {
                yield $book;
            }
        }
    }
}