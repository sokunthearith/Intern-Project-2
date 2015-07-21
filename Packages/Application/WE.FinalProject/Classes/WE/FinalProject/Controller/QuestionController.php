<?php
namespace WE\FinalProject\Controller;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "WE.FinalProject".       *
 *                                                                        *
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\Flow\Mvc\Controller\ActionController;
use WE\FinalProject\Domain\Model\Question;

class QuestionController extends ActionController {

	/**
	 * @Flow\Inject
	 * @var \WE\FinalProject\Domain\Repository\QuestionRepository
	 */
	protected $questionRepository;

	/**
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('questions', $this->questionRepository->findAll());
	}

	/**
	 * @param \WE\FinalProject\Domain\Model\Question $question
	 * @return void
	 */
	public function showAction(Question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * @param \WE\FinalProject\Domain\Model\Question $newQuestion
	 * @return void
	 */
	public function createAction(Question $newQuestion) {
		$this->questionRepository->add($newQuestion);
		$this->addFlashMessage('Created a new question.');
		$this->redirect('index');
	}

	/**
	 * @param \WE\FinalProject\Domain\Model\Question $question
	 * @return void
	 */
	public function editAction(Question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * @param \WE\FinalProject\Domain\Model\Question $question
	 * @return void
	 */
	public function updateAction(Question $question) {
		$this->questionRepository->update($question);
		$this->addFlashMessage('Updated the question.');
		$this->redirect('index');
	}

	/**
	 * @param \WE\FinalProject\Domain\Model\Question $question
	 * @return void
	 */
	public function deleteAction(Question $question) {
		$this->questionRepository->remove($question);
		$this->addFlashMessage('Deleted a question.');
		$this->redirect('index');
	}

}