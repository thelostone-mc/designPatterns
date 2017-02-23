<?php
	// Factory - Delegate instantiation logic to child classes.

	interface Interviewer {
		public function askQuestion();
	}

	class Developer implements Interviewer {
		public function askQuestion() {
			echo 'Ask a design pattern question';
		}
	}

	class CommunityExecutive  implements Interviewer {
		public function askQuestion() {
			echo 'Asking about community building';
		}
	}

	// Hiring Manager
	abstract class HiringManager {
		abstract public function makeInterviewer() : Interviewer;

		public function takeInterview() {
			$interviewer = $this->makeInterviewer();
			$interviewer->askQuestion();
		}
	}

	class DevelopmentManager extends HiringManager {
		public function makeInterviewer() : Interviewer{
			return new Deverloper();	
		}
	}

	class MarketingManager extends HiringManager {
		public function makeInterviewer() : Interviewer {
			return new CommunityExecutive();
		}
	}

	$devManager = new Developmentmanager();
	$devManager->takeInterview();

	$marketingManager = new MarketingManager();
	$marketingManager->takeInterview();

?>
