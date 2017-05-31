<?php

/**
 * Dispatches requests pertaining to Yubnub commands.
 */
class WelcomeController extends Controller {

    /**
     * Displays a form for creating a new command.
     *
     * @param string $errorMessage  an error message if the submission failed
     */
    public function action_show($errorMessage = null) {
        $commandService = new CommandService();
        $this->render('show', array(
            'pageTitle' => 'Welcome! ' . $commandService->getDate(),
        ));
    }
}
