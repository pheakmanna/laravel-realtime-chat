<?php

class ConversationUserController extends \BaseController {

	public function getIndex($user_id) {
		$conversations_users = ConversationUser::where('user_id', $user_id)->lists('conversation_id');
		$conversations 		 = Conversation::whereIn('id', $conversations_users)->get();

		return Response::json([
			'success' => true,
			'result' => $conversations
		]);
	}
}