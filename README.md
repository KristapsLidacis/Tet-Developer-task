# Tet-Developer-task
Tet job interview task

<p>This is a repository for Tet given job interview task, for PHP developer vacancy.<br>
In this task I had to - Build a small e-commerce type of application as a distributed system with the following services:<br>
 - User service<br>
 - Purchase service<br>
 - Email service<br>
The data should be stored in persistent storage with a caching mechanism.<br>
The user service should have the following API endpoints:<br>
 - GET /users that returns an array of user objects, each including the following user data: id, first name, last name, and e-mail
address.<br>
  - GET /users/:id that returns the object with the data for the specific user.<br>
The purchase service should have the following API endpoints:<br>
 - GET /items that returns an array of item objects, each including the following item data: id, name, and price.<br>
 - POST /purchase that accepts a payload with a reference to the user and the item to be purchased. The purchase is considered
to be successful if the price of the item is lower than 50. The fact of purchase should be asynchronously published in a
message broker or a distributed event system where it would be picked up by the email service.<br>
The email service should be able to:<br>
 - Send a confirmation email to the user about a successful purchase if the price of the item is lower than 50.<br>
 - Send a rejection email to the user if the price of the item equals or is higher than 50.<br>
Note that the service doesn't really need to send a real e-mail, but it should be possible to acknowledge the fact that the respective
purchase has been processed.<br>

The frontend of the application should consist of two pages:<br>
 - The home page with the list of users. It should be possible to view the details of each user in a different view.<br>
 - The user page with the user details and the list of available purchase items. It should be possible to purchase a single item.<br>
Recommended technologies:<br>
Backend: PHP (Laravel, Symfony), Kafka, RabbitMQ, Redis, PostgreSQL (or any other persistent storage).<br>
Frontend: Angular, Vue.js, React, or any other SPA framework.<br>
It should be possible to set up the entire system with a single Docker Compose file.</p>
