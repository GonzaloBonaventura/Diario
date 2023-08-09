# Basic Blogging/Forum Platform

This project implements a basic blogging/forum platform that allows users to register, log in, create posts, and view posts made by others.

## Core Functionality

### User Authentication

- A registration system where new users can sign up with a unique username, email address, and password. Passwords are securely hashed before storing in the database.
- A login system where users can log in with their username/email and password. This checks the credentials against the database and starts a session to keep them logged in across pages.
- Only logged-in users can access certain pages like creating new posts. Sessions control access.

### Post Creation

- Once logged in, users have a form where they can create a new text post. This submits the post content which gets saved in the database along with the author's user ID and timestamp.

### Viewing Posts

- There is a page where all posts from all users are shown in chronological order from newest to oldest.
- Posts are displayed in a paginated view with 10 posts per page for easy browsing.
- Each post displays the author's username, date posted, and the content.

### User Profile Pages

- Logged-in users have a profile page displaying their username. In the future, this could show history of their posts.

### Navigation

- The navigation bar changes depending on whether the user is logged in or not.
- Logged-out users see links to register or login. Logged-in users see a link to their profile and logout.
- Forms for registration, login, new post creation are conditional based on login status.

This covers the core functionality like authentication, posting, and viewing. Additional features could be added to make it more robust like comments, categories, rich text editor, moderation, user avatars, etc. But the basic blogging platform is implemented.

## Author

* *Bonaventura Gonzalo*  - [Linkedin](https://www.linkedin.com/in/gonzalo-bonaventura) -  [GitHub](https://github.com/GonzaloBonaventura)
