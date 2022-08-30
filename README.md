# Symfony: Requiem
This lil' project is a learning challenge.
And the challenge's name is: Symfony.
So I will not focus on finishing everything in time, my main priority will be learning.

The only Symfony I have ever known is in music, and even then my knowledge of it is very limited.
These are the goals that have been set by our coaches for this assignment:

* Install Symfony
* Learn about the lifecycle of software
* Learn to use the MVC layer of Symfony
* Learn to use the routing component
* Learn the basics of twig

---

## Installing Symfony
The installing process should've been an easy one. **It should've**. 
But I did end up with some minor problems.
For reasons still unknown to me, my GitBash terminal couldn't access my PHP.
Commands like <code>php -v</code> and the like did work in the terminal, but once I tried the <code>symfony new my_project_directory --version="6.1.*" --webapp</code>, it gave me an error saying that the no PHP binaries were detected.

The issue was fixed the moment I started using the Command Prompt tho, so that's nice.

I thought it was funny that I had to use the Windows Powershell to install Scoop so I could install Symfony.
So I made a meme about it, because of course I did.

![cli-meme](readme-images/cli.png)

## Getting Started: The Lucky Number
No I'm not talking the numbers 69, 420 or 42069.
I'm talking about a small mini-task I will be doing before starting on the big-boy assignment.
In the Symfony documentation, they have a lil' guid there on how to create a page.
I will be following along those steps in order to understand how Symfony works a bit better.
Once that's done, I will **DEMOLISH** the task given to us by the coaches with my newfound Symfony Powers!!

I do want to say that the Symfony documentation is one of, if not the best, documentation I ever had the honour of laying my eyes on!
So making that documentation even easier to understand is damn near impossible!
Nonetheless, I will keep writing everything in my own words 'cuz that's just how I be learning cuz.

### Creating a page: Route and Controller
I started out by creating a "Controller" class with a "controller" method inside of it.
This was placed in the <code>src/controller</code> folder.
Once the controller has been made, I had to assign a 'route' to it.
So I created a route in the <code>routes/</code> folder.

This was easy enough, because I have been made a bit familiar with routes thanks to an assignment we made before this one in React.

### Annotation Routes
Now I added an annotation route to the controller.
Instead of using a <code>routes.yaml</code>, we can use the annotation route.
It's basically just a different way of defining the route.
This is more clear and more easily customizable in my opinion.

### Rendering a template
Among all the steps, this one was the most complicated one.
But I'll try to explain it in my own words as good as possible. 

The first step was to require twig, and to then rewrite <code>class LuckyController</code> to this: <code>class LuckyController extends AbstractController</code>.
Because of this change, we can now access a lot of methods from the AbstractController class, including, the <code>$this->render()</code> method, the method we will be using.

We can also pass variables from the controller to the twig file we will make.
These however, do need to be defined in the controller.
Then you can use the variables in the template, which will result in some fun, interactive webpages!

The twig file will be the template that we will be rendering.
The template will just be the HTML file of the webpage, and the render function is what will make the HTML file actually visible.

### Independent Reading Time
With the lucky number task out of the way, it's time to start some good ol' reading.
And like I mentioned earlier, the Symfony documentation is very heckin' well written, so this will be fun!
So fun in fact, I even made a meme about it.

![independent-reading-time](readme-images/independent-reading-time.png)

#### Independent Reading Time: Routes


---

## Symfony Project Structure
Here I will be writing how the structure of a Symfony project actually looks and works like.

* <code>config/</code>
  * Here is where all the configuration is. This is the place we need to be when **configuring routes, services and packages**
* <code>src/</code>
  * PHP Code extravaganza, if it's PHP, Put (it) Here Pal!
* <code>templates/</code>
  * You can call this place a tree, 'cus I see nothin' but **twigs** around here! This is where all the twig templates need to be.

These were the most important directories, since that's where we'll be mainly working.
But, there are other directories as well!

* <code>bin/</code>
  * Our Lord and Saviour the <code>bin/console</code> lives here (including some other executable files, but they aren't that important).
* <code>var/</code>
  * Automatically-created files are stored here (<code>var/cache</code>) and logs (<code>var/log</code>).
* <code>vendor/</code>
  * Third-party libraries live here (stuff that's downloaded through Composer).
* <code>public/</code>
  * The document root for the project, all **publicly** accessible files need to be put here, like funny memes, or even more funny memes (and don't forget my personal favourite, some funny memes).

---

## Symfony Terminology
If there's one thing Web Development is known for, it's having a lot of big fancy schmancy words I keep forgetting the definition of.
So the goal of this part of the README is to write down some terminology in my own words, so I can remember them.

* Route:
  * The part of the URL that comes after the <code>/</code> that points to your page.
  * For example, in the case of <code> www.fakewebsitedonotclick.pls/about-us </code>, the <code>/about-us</code> is the route.
    * So this URL is the URL that goes to your page.
* Controller:
  * A controller is the PHP function you write that builds the page.
  You take the incoming request information and use it to create a Symfony Response object, which can hold HTML content, a JSON string or even a binary file like an image or PDF.