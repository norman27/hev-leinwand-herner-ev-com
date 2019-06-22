<?php

namespace Tests\AppBundle\Screen;

use AppBundle\Screen\FilesRepository;
use PHPUnit\Framework\TestCase;

class FilesRepositoryTest extends TestCase
{
    /** @var FilesRepository */
    private $filesRepository;

    public function setUp()
    {
        $this->filesRepository = new FilesRepository('');
    }

    public function test_simplifyFilename_removesSpaces()
    {
        $this->assertEquals('foo-bar.jpg', $this->filesRepository->simplifyFilename('foo bar.jpg'));
    }
}