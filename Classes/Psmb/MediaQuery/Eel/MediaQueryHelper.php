<?php
namespace Psmb\MediaQuery\Eel;

use Neos\Flow\Annotations as Flow;
use TYPO3\Eel\ProtectedContextAwareInterface;
use TYPO3\Media\Domain\Model\Tag;
use TYPO3\Media\Domain\Model\ImageInterface;
use TYPO3\Media\Domain\Repository\TagRepository;
use TYPO3\Media\Domain\Repository\ImageRepository;

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
