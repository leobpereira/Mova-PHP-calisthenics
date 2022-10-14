<?php

namespace Alura\Calisthenics\Tests\Unit\Domain\Video;

use Alura\Calisthenics\Domain\Video\Video;
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase
{
    // Função que torna um vídeo público
    public function testMakingAVideoPublicMustWork()
    {
        $video = new Video();
        $video->publish();

        self::assertTrue($video->isPublic()); // Verifica se o vídeo está público ou não
    }
}
