# Homework Instructions

### Overview

For this assignment, you'll create an application called My Fitness Buddy (MFB), a lightweight calorie counter and tracker.

My Fitness Buddy's primary functionality is as follows:

1. Allow users to login to their accounts;
2. Add meals they eat throughout the day, along with the foods that comprise the meal;
3. Track macro-nutrient data for each food (protein, carbohydrates, fat);
4. Display meals the user has eaten today on the user's dashboard.

You can view [an example implementation here](https://boiling-castle-97643.herokuapp.com/).

### Before You Begin

1. We'll be using MySQL for this assignment, so make sure your server is configured correctly. Be sure you remember your database **username** and **password**, as well.

### Instructions

#### Setup

1. Create a new Laravel project and `cd` into it. 
2. Serve your app to make sure you're ready to get started.
3. Initialize a new Git repository and make your initial commit.

#### Tasks

1. Create a new MySQL database for your app.
2. Configure your database connection.
3. What file contains your environment configurations?
4. What file references this configuration, and sometimes requires manual overrides?
5. Use `php artisan tinker` to verify your database connection. An easy way to go about this, while familiarizing yourself with Laravel's [Connection class](https://laravel.com/api/5.0/Illuminate/Database/Connection.html), is to create a table; insert a record into it; and then drop the table.
6. Use the [database documentation](https://laravel.com/docs/5.0/database#configuration)  to figure out how to do this.

7. Use Artisan to set up user authentication. 
8. Which Artisan command do you use to accomplish this?
9. _Hint_: Read the docs, and check the output from `php artisan` for anything about authentication.
10. Scaffolding authentication creates some database tables. What command do you use to integrate these properly?
11. Serve the app and create a test user to ensure everything is hooked up correctly.

From here, you'll build out the primary functionality of your application.

#### Walkthrough

##### **Milestone 1** // Meals

1. Create a Meal model.
2. Make sure your Meal model allows users to add a name.
3. Create your Meals controller and hook it up in `routes.php`
4. _Hint_: This takes _very_ little code.
5. Make sure unauthenticated users can't access Meal routes!
6. Add a form that allows users to create a meal.
7. What method serves the form to create a meal?
8. What method handles the submission?
9. Where is the best place to redirect a user after creating a meal?
10. Create a page to display meal details.
11. We want to know when the meal was entered, but the timestamp isn't human
    readable. Fix this. _Hint_: Check the [docs](http://carbon.nesbot.com/docs/), or use [PHP's `format` method directly](http://php.net/manual/en/function.date.php).

##### **Milestone 2** // Foods

1. On the meal detail page, create a form that allows users to add foods.
2. After you've wired up the backend, use [Bootstrap to prettify your forms](http://v4-alpha.getbootstrap.com/components/forms/#form-layouts) to make things look pretty.
3. Create the Food model and controller that will allow us to actually implement this.
4. What is the relationship between a Food and a Meal? Update your code to reflect this relationship.
5. Wire the Create Food form up to your FoodsController. Consider the following:
6. You'll need to make a change in your `routes.php`.
7. What controller(s) handles this update?
8. [Refer to the documentation](https://laravel.com/docs/5.1/controllers#restful-nested-resources) for help.
9. Make sure you can see a Meal's foods on the detail page.
10. If there are no foods, let the user know _Hint_: Blade has if statements.
11. Add information to the Meals detail page, like total calories in the meal, total macronutrients, etc.
12. How would you get this information, and where would you place your methods?

##### **Milestone 3** // Validations

1. Take a moment to ensure that users can't enter meals without names, or
   foods without names and macronutrient data.
2. Validate both on the frontend, with HTML5 input attributes, and on the backend.
3. If you'd like, you can only require food names, and default food macronutrient values to 0.
4. Be sure to refer to the [documentation](https://laravel.com/docs/5.2/validation)!

##### **Milestone 3** // Homepage

Build out the following in your HomeController.

1. Display earliest meals first (i.e., breakfast, then lunch, then dinner).
2. What relation does this imply?
3. Where will you need to update your routes?
4. Display the user's meals for the day, or a notification that they haven't eaten anything and a link for adding meals.
5. Where should you be retrieving today's meals?
6. The query isn't trivial. Refer to [this blog post](http://laraveldaily.com/eloquent-date-filtering-wheredate-and-other-methods/) for a how-to. _Hint_: Use the Carbon method. But, be sure to require the Carbon class!
7. Add an 'All Meals' link to the navbar, and report every meal a user has ever saved.
8. Don't worry about prettifying this just yet; dump the data into a list for now.
9. Redirect all requests coming from an authenticated user to the welcome route to this dashboard. 
10. In other words, unauthenticated users should see the landing page. Authenticated users should always be redirected to the dashboard if they try to hit the landing page.

### BONUS

1. Present the user's macronutrient and calorie totals on the homepage. If the user's calorie total is above their calorie threshold for the day, color it red.

- - -

#### Minimum Requirements

Attempt to complete homework assignment as described in instructions. If unable to complete certain portions, please pseudocode these portions to describe what remains to be completed.

- - -

#### Hosting on Heroku

Now that we have a backend to our applications, we use Heroku for hosting. Please note that while **Heroku is free**, it will request credit card information if you have more than 5 applications at a time or are adding a database. 

Please see [Heroku’s Account Verification Information](https://devcenter.heroku.com/articles/account-verification) for more details. 

**Good luck!**
