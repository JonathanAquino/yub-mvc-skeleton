<?php

/**
 * Dispatches requests pertaining to Yubnub commands.
 */
class CommandController extends Controller {

    /**
     * Displays a form for creating a new command.
     *
     * @param string $errorMessage  an error message if the submission failed
     */
    public function action_new($errorMessage = null) {
        $commandService = new CommandService();
        $this->render('new', array(
            'pageTitle' => 'Create A New Command ' . $commandService->getDate(),
        ));
    }
}
