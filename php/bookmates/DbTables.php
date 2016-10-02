<?php

/**
 * Created by PhpStorm.
 * User: A
 * Date: 02/10/2016
 * Time: 23:07
 */
class DB_USERS {
    public static $TABLE_NAME = 'users';
    public static $ID = 'id';
    public static $LOGIN_ID = 'login_id';
    public static $EMAIL = 'email';
    public static $PASSWORD = 'PASSWORD';
}

class DB_TRANSACTIONS {
    public static $TABLE_NAME = 'transactions';
    public static $ID = 'id';
    public static $USER_ID = 'user_id';
    public static $MATE_ID = 'mate_id';
    public static $BOOK_COPY_ID = 'book_copy_id';
    public static $TIMESTAMP = 'timestamp';
    public static $DUE_DATE = 'due_date';
    public static $STATE = 'state';
    public static $TYPE = 'type';
    public static $RESOLVED_DATE = 'resolved_date';
    public static $CONVERSATION_ID = 'conversation_id';
    public static $RATING = 'rating';
    public static $REVIEW = 'review';
}

class DB_MESSAGES {
    public static $TABLE_NAME = 'messages';
    public static $ID = 'id';
    public static $CONVERSATION_ID = 'conversation_id';
    public static $MESSAGE = 'message';
    public static $TIMESTAMP = 'timestamp';
}

class DB_MATESHIP {
    public static $TABLE_NAME = 'mateship';
    public static $ID = 'id';
    public static $MATE1_ID = 'mate1_id';
    public static $MATE2_ID = 'mate2_id';
    public static $CONVERSATION_ID = 'conversation_id';
}

class DB_CONVERSATIONS {
    public static $TABLE_NAME = 'conversations';
    public static $ID = 'id';
    public static $LAST_TIMESTAMP = 'last_timestamp';
}

class DB_BOOK_WISHLIST {
    public static $TABLE_NAME = 'book_wishlist';
    public static $USER_ID = 'user_id';
    public static $BOOK_MASTER_ID = 'book_master_id';
    public static $BOOK_COPY_ID = 'book_copy_id';
}

class DB_BOOK_REVIEWS {
    public static $TABLE_NAME = 'book_reviews';
    public static $ID = 'id';
    public static $BOOK_MASTER_ID = 'book_master_id';
    public static $REVIEW = 'review';
    public static $TIMESTAMP = 'timestamp';
}

class DB_BOOK_OWNERSHIP {
    public static $TABLE_NAME = 'book_ownership';
    public static $USER_ID = 'user_id';
    public static $BOOK_COPY_ID = 'book_copy_id';
}

class DB_BOOK_MASTER_REQUESTS {
    public static $TABLE_NAME = 'book_master_requests';
    public static $ID = 'id';
    public static $MASTER_ID = 'master_id';
    public static $MESSAGE = 'message';
    public static $REQUEST_FLAG = 'request_flag';
}

class DB_BOOK_MASTERS {
    public static $TABLE_NAME = 'book_masters';
    public static $ID = 'id';
    public static $TITLE = 'title';
    public static $AUTHOR = 'author';
    public static $PUBLISHER = 'publisher';
    public static $PUBLISH_YEAR = 'publish_year';
    public static $TAGS = 'tags';
    public static $RATING = 'rating';
    public static $DESCRIPTION = 'description';
}

class DB_BOOK_COPIES {
    public static $TABLE_NAME = 'book_copies';
    public static $ID = 'id';
    public static $MASTER_ID = 'master_id';
    public static $STATE = 'state';
    public static $DESCRIPTION = 'description';
}

?>