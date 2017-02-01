<?php
namespace Psmb\MediaQuery\Eel;

use Neos\Flow\Annotations as Flow;
use Neos\Eel\ProtectedContextAwareInterface;
use Neos\Media\Domain\Model\Tag;
use Neos\Media\Domain\Model\ImageInterface;
use Neos\Media\Domain\Repository\TagRepository;
use Neos\Media\Domain\Repository\ImageRepository;

class MediaQueryHelper implements ProtectedContextAwareInterface
{
	/**
	 * @Flow\Inject
	 * @var TagRepository
	 */
	protected $tagRepository;

	/**
	 * @Flow\Inject
	 * @var ImageRepository
	 */
	protected $imageRepository;

	/**
	 * @return ImageInterface[]
	 */
	public function imagesByTag($tagLabel) {
		if (empty($tagLabel)) {
			return [];
		}
		/** @var Tag $tag */
		$tag = $this->tagRepository->findOneByLabel($tagLabel);
		return $this->imageRepository->findByTag($tag)->toArray();
	}

	/**
	 * All methods are considered safe
	 *
	 * @param string $methodName
	 * @return boolean
	 */
	public function allowsCallOfMethod($methodName)
	{
		return true;
	}
}
