@extends('_layouts.master', ['title'=>'Next Task | Raymond Lee'])

@section('content')
  @include('_components.project-banner', [
    'title'=>'Next Task',
    'subtitle'=>'Customer task scheduling web app'
  ])

  @include('_components.project-description', [
    'image'=>[
      'url'=>'/assets/images/next-task/tasks.png',
      'alt'=>'Next Task main tasks page'
    ],
    'context'=>'Personal Project',
    'technologies'=>['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript', 'Foundation'],
    'links'=>[
      ['url'=>'https://github.com/imraymondlee/NextTask', 'text'=>'View Source']
    ]
  ])
  <hr class="divider">
  <div>
    <section class="project-section">
      <h2>Overview</h2>
      <p>Next Task is an app designed for people who have customers that require scheduled visits, such as tutors, landscapers, or dog walkers. I developed this web app after seeing an opportunity for workers to improve their work management processes. With Next Task, customer information can be managed along with having the ability to see when there is an upcoming visit to a customer. After user research, prototypes, and user tests, the final product was built using PHP, MySQL, HTML, CSS, and JavaScript.</p>
    </section>
    <section class="project-section">
      <h2>Process</h2>
      <h3 class="u-h4">User Research</h3>
      <p>The first stage involved conducting interviews with a tutor and a landscaper. These jobs fall in the target of who the app is designed for as they have many customers that they visit periodically. During the interviews, the tutor and landscaper through current methods that they use to manage their customers and tasks. It was found that for both of them, customer information is primarily stored as a contact on their phone. Scheduling for when they next visit a customer is written in an agenda. After looking through their process, I discussed with them about ways on how it can be improved. The plan was to digitize their work scheduling process and find a way to easily assign the next time they visit a customer.</p>
      <h3 class="u-h4">Prototype</h3>
      <p>I started with sketches of how the app would be laid out and what features it would have. The plan was to have two separate tables with one being filled with upcoming tasks and the other with customer information. The user can add tasks and customers in the system. Each time a task has been completed, it will be renewed for another visit based on a specified interval.</p>
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/sketches.png', 'alt'=>'Initial sketches of Next Task interface for the tasks, new task, customers, customer profile pages.'],
        'caption'=>'Initial sketches of Next Task.'
      ])
      <p>The prototype was created using Skeleton framework as I wanted to keep it simple for the next step of user testing. Findings from the user tests with the prototype were that there wasn't a way to specify exactly how frequent to visit each customer. Also, tasks and customers cannot be deleted, and it would be useful to have a way to write down notes about each task and customer.</p>
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/prototype.png', 'alt'=>'Prototype of Next Task interface.'],
        'caption'=>'Prototype of Next Task was built for user testing.'
      ])
      <h3 class="u-h4">Final Product</h3>
      <p>The final web app was developed using Foundation framework along with PHP and MySQL in the back-end. It is responsive with a layout that has a navigation menu on the side for larger screens and one with a bottom navigation menu for smaller screens. Links to add new tasks and customers were added to the menu for them to be easily accessible.</p>
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/responsive.png', 'alt'=>'Responsive layout of the web app.'],
        'caption'=>'Responsive layout of the web app for desktop and mobile.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/tasks.png', 'alt'=>'Tasks page'],
        'caption'=>'"Tasks" page provides a list of upcoming tasks with brief information about the customer. Clicking on "Completed" will mark the task as complete whereas "Renew" will schedule the next visit for that task on top of marking it as complete.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/task-info.png', 'alt'=>'Individual task page for a specific task'],
        'caption'=>'Each specific task page will provide more information about that task, such as the renewal frequency and notes. There is also the ability to make changes or remove that task.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/customers.png', 'alt'=>'Customers page'],
        'caption'=>'"Customers" page provides a list of all the customers along with frequently referred information.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/profile.png', 'alt'=>'Customer Profile page'],
        'caption'=>'Going into each customer profile will provide more information about the customer as well as the ability to make changes or remove that customer. In addition, there is a history of completed tasks for the customer.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/new-task.png', 'alt'=>'New Task page'],
        'caption'=>'"New Task" page allows new tasks to be added to the system in relation to the customers.'
      ])
      @include('_components.figure-caption', [
        'image'=>['url'=>'/assets/images/next-task/new-customer.png', 'alt'=>'New Customer page'],
        'caption'=>'"New Customer" page allows new customers to be added to the system.'
      ])
    </section>
    <section class="project-section">
      <h2>Reflection</h2>
      <p>This project has allowed me to go through the process of user-centered design and develop a web app using different web technologies. I also learned how to use front-end frameworks, which helped in the development process by improving efficiency when creating the app. One thing that I would change is to have more users in different fields to broaden my perspective on other people's processes.</p>
    </section>
  </div>
@endsection