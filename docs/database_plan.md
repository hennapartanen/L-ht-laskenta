#CounterApp Database

## users

* uid (PRIMARY KEY)
* username (text 50)
* password (text 100)
* email  (text 200)

## counters

* cid (PRIMARY KEY)
* topic (text 100)
* message (text 255)
* image (???)
* count_to_date (date time)
* public (true)