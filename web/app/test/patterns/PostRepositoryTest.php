<?php
/**
 * Created by PhpStorm.
 * User: Ievgen_Kyvgyla
 * Date: 18-Sep-18
 * Time: 11:34
 */

namespace Dallask\Patterns\Other\Repository\Tests;

use Dallask\Patterns\Other\Repository\Domain\PostId;
use Dallask\Patterns\Other\Repository\Domain\PostStatus;
use Dallask\Patterns\Other\Repository\InMemoryPersistence;
use Dallask\Patterns\Other\Repository\Domain\Post;
use Dallask\Patterns\Other\Repository\PostRepository;
use PHPUnit\Framework\TestCase;

class PostRepositoryTest extends TestCase {

  /**
   * @var PostRepository
   */
  private $repository;

  protected function setUp() {
    $this->repository = new PostRepository(new InMemoryPersistence());
  }

  public function testCanGenerateId() {
    $this->assertEquals(1, $this->repository->generateId()->toInt());
  }

  /**
   * @expectedException \OutOfBoundsException
   * @expectedExceptionMessage Post with id 42 does not exist
   */
  public function testThrowsExceptionWhenTryingToFindPostWhichDoesNotExist() {
    $this->repository->findById(PostId::fromInt(42));
  }

  public function testCanPersistPostDraft() {
    $postId = $this->repository->generateId();
    $post = Post::draft($postId, 'Repository Pattern', 'Dallask\ Patterns PHP');
    $this->repository->save($post);

    $this->repository->findById($postId);

    $this->assertEquals($postId, $this->repository->findById($postId)->getId());
    $this->assertEquals(
      PostStatus::STATE_DRAFT, $post->getStatus()->toString()
    );
  }
}
