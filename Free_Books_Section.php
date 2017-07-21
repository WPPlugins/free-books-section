<?php
/*
Plugin Name: Free Books Section
Plugin URI: http://www.whitedovebooks.co.uk/
Description: This plugin embeds an Amazon Bookstore into your site, quickly and easily. You earn affiliate commissions via Amazon. Please ensure your settings (Settings/Free Books Section) are updated with your Amazon affiliate details.

Version: 5.1
Author: Will Edwards
Author URI: http://www.whitedovebooks.co.uk/
*/

/*
This program is provided under the terms of the GNU General Public License 
as published by the Free Software Foundation, either Version 3 or later.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

GNU General Public License URI: http://www.gnu.org/licenses/
*/

/* Runs when plugin is activated */
register_activation_hook(__FILE__eas,'eas_install'); 

/* Runs on plugin deactivation*/
register_deactivation_hook( __FILE__eas, 'eas_remove' );

function eas_install() {
/* Creates new database field */
add_option("eas_data", 'AFFILIATE ID', '', 'yes');
}

function eas_remove() {
/* Deletes the database field */
delete_option('eas_data');
}
   
add_shortcode('free_books_section', 'free_books_section');

function free_books_section() {
  $lepid = get_option('eas_data');

  return <<<HTML

<!DOCTYPE html>
<html>
<style>
body {font-family: "Lato", sans-serif;}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border-bottom: 1px solid #aaa;
    background-color: #fff;
}

/* Float the list items side by side */
ul.tab li {float: left;
}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 4px 10px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 14px;
}

/* Change background style of links on hover */
ul.tab li a:hover {
    text-decoration: underline;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
   background-color: #EEE;
   color: #000;
}

/* Style the Content Tab */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 0px solid #eee;
    border-top: 0px;
}
</style>
<body>

<div id="Amazon-Menu" style="max-width: 800px">

<ul class="tab">
  <li><a href="javascript:void(0)" class="tablinks" id="defaultOpen" onclick="openCity(event, 'Free Books')">Free Books</a></li>

  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Audio Books')">Audio Books</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Paperbacks')">Paperbacks</a></li>
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'Best Sellers')">Best Sellers</a></li>

</ul>

<div id="Free Books" class="tabcontent">
<br>
<b>The 7 Keys to Success</b>
<p style="text-align: left;"><a href="http://myBook.to/7Keys" target="_blank"><img class="alignleft" style="float: left;" src="http://www.whitedovebooks.co.uk/plugin/images/7-Keys-Medium.jpg" alt="" border="0" /></a>This book will challenge you to rethink your life and what is really important to you. <i>The 7 Keys to Success</i> contains an important message - it is time for you to wake-up and start living the life you were born to live, and to do that, you need to acquire these seven important keys. By living the life you were born to lead, you will not only go on to achieve great success, you will also know that inner peace that comes from living a life that truly matters; one that actually makes a difference.</p>
<p>
<a href="http://myBook.to/7Keys" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>Napoleon Hill's Awesome Secret</b>
<p style="text-align: left;"><a href="http://myBook.to/NHSecret" target="_blank"><img class="alignleft" style="float: left;" src="http://www.whitedovebooks.co.uk/plugin/images/Secret-Medium.jpg" alt="" border="0" /></a>During Napoleon Hill's early career as a newspaper reporter, he met and interviewed Andrew Carnegie, the richest man in the world at the time, who issued him with a challenge. Carnegie commissioned Hill to interview 500 extremely successful men and, from the experience, distil the secret of success into a simple workable formula. In Will Edwards' book, his famous 'secret' for creating wealth is outlined in a simple 7-step plan that anyone can apply to create abundance.</p>
<p>
<a href="http://mybook.to/NHSecret" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>The Making of a Warrior</b>
<p style="text-align: left;"><a href="http://mybook.to/MakingWarrior" target="_blank"><img class="alignleft" style="float: left;" src="http://www.whitedovebooks.co.uk/plugin/images/Warrior-Medium.jpg" alt="" border="0" /></a>This story is an allegory that follows my personal journey, from seeking to find success by building an online business, to finally arriving. You may be seeking success right now. Perhaps you are still looking for that little pearl of wisdom that can make the difference and propel you forward toward your goal. Well, you will find something of real value in this little book which was written especially for you. Read this book and start planning for your success, in the right way.</p>
<p>
<a href="http://mybook.to/MakingWarrior" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>

<b>Think BIG and Grow Rich!</b>
<p style="text-align: left;"><a href="http://mybook.to/ThinkBig" target="_blank"><img class="alignleft" style="float: left;" src="http://www.whitedovebooks.co.uk/plugin/images/pri_0017.jpg" alt="" border="0" /></a>Many books on the subject of the laws of success  (including the law of attraction) turn out to be inaccurate, contain misinformation or are incomplete in some way. To achieve financial success, you do not need any more information than you will find in this book. Read it, study it, digest and apply the infallible system presented inside, because natural laws and principles of success are a part of our reality and they are waiting for you to make full use of them.</p>
<p>
<a href="http://mybook.to/ThinkBig" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>The Deepest Desire of Your Heart</b>
<p style="text-align: left;"><a href="http://mybook.to/DeepestDesire" target="_blank"><img class="alignleft" style="float: left;" src="http://www.whitedovebooks.co.uk/plugin/images/Desire-Medium.jpg" alt="" border="0" /></a>This book concerns understanding the timeless, unerring principles that always bring success. So that, by the law of cause and effect, real outstanding success can truly be yours. Using these exact methods, many people are producing amazing results in their lives, and so can you! This book represents the culmination of many years of research into the principles of success and it contains everything you need to accomplish the most amazing transformation!</p>
<p>
<a href="http://mybook.to/DeepestDesire" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>The Bible Secret</b>
<p style="text-align: left;"><a href="http://mybook.to/BibleSecret" target="_blank"><img class="alignleft" style="float: left;" src="http://www.whitedovebooks.co.uk/plugin/images/pri_019.jpg" alt="" border="0" /></a>Revealed in this book is a specific message that is very important for everyone who believes. So, hopefully, that includes you! Your personal awakening to the importance of this message and the release of its astonishing power might constitute something of a revolution in your life. You may begin to do things and achieve goals you never imagined were remotely possible for you in your previously, limited understanding of what your life is about. </p>
<p>
<a href="http://mybook.to/BibleSecret" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<p style="text-align: left;">Will Edwards is an author and the Founder of <i>White Dove Books</i>, one of the internet's leading Personal Development sites. He also runs Personal and Professional Development workshops. When he is not working, he likes to write and play music or relax with a glass of red.
</p>

</div>

<div id="Audio Books" class="tabcontent">
<br>
<b>The 7 Laws of Positive Thinking</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Laws-Positive-Thinking-Through-Negativity/dp/B01M0U3YJE/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51Gnb-g1FoL._AA300_.jpg" alt="" width="120" border="0" /></a>Let Brian Cagneey take you on a journey of self-discovery in The 7 Laws of Positive Thinking: Positive Energy Through Self Help: Using the Power of Belief to Destroy Negativity. In this fascinating guide, Brian helps you stop holding back from what you want, take control of your mind, and get into the driver's seat of your life with a positive psychology.</p>
<p>
<a href="https://www.amazon.com/Laws-Positive-Thinking-Through-Negativity/dp/B01M0U3YJE/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>Declutter Your Mind</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Declutter-Your-Mind-Worrying-Eliminate/dp/B01LVV9JZD/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/41YFXAEm9uL._AA300_.jpg" alt="" WIDTH="120" border="0" /></a>Feel overwhelmed by your thoughts? Struggling with anxiety about your daily tasks? Or do you want to stop worrying about life? The truth is we all experience the occasional negative thought. The goal of this book is simple: to  teach you to acquire the habits, actions and mindset needed to clean up the mental clutter that is holding you back.</p>
<p>
<a href="https://www.amazon.com/Declutter-Your-Mind-Worrying-Eliminate/dp/B01LVV9JZD/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>Influence: The Psychology of Persuasion</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Influence-The-Psychology-of-Persuasion/dp/B01KWAPHAK/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/511jkJUNXNL._AA300_.jpg" alt="" width="120" border="0" /></a>Dr. Robert Cialdini is the seminal expert in the field of persuasion. His 35 years of research, along with a three-year study on what moves people to change behavior, has resulted in this highly acclaimed book. You'll learn the six universal principles, how to use them to become a skilled persuader - and how to defend yourself against them.</p>
<p>
<a href="https://www.amazon.com/Influence-The-Psychology-of-Persuasion/dp/B01KWAPHAK/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>The 21 Day Self-Confidence Challenge</b>
<p style="text-align: left;"><a href="https://www.amazon.com/21-Day-Self-Confidence-Challenge-Step-Step/dp/B019Y8QKGQ/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/518S7-sp7ZL._AA300_.jpg" alt="" width="120" border="0" /></a>Do you often feel like you're not good enough? Are you ready to change your life and reclaim your self-confidence? While everyone can agree that it's great to have self-confidence, we generally imagine it's only reserved for those special people who've earned it and that we'll get there someday. But why not YOU and why not right now?</p>
<p>
<a href="https://www.amazon.com/21-Day-Self-Confidence-Challenge-Step-Step/dp/B019Y8QKGQ/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>Think and Grow Rich</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Think-and-Grow-Rich/dp/B000XJNDVQ/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/61atv8Q26iL._AA300_.jpg" alt="" width="120" border="0" /></a>The book has helped millions of people to create their own success. If you've never read <i>Think and Grow Rich</i> before, this audio condensation may provide your own personal 'aha' moment. And if you have read or listened before, then this forty-three minute motivational gem may be the best refresher course ever to set you back on the road to riches.</p>
<p>
<a href="https://www.amazon.com/Think-and-Grow-Rich/dp/B000XJNDVQ/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>The Universe Has Your Back</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Universe-Has-Your-Back-Transform/dp/B01LY5W61P/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51qchh%2B9KeL._AA300_.jpg" alt="" width="120" border="0" /></a>In her latest book, The Universe Has Your Back, New York Times best-selling author Gabrielle Bernstein teaches listeners how to transform their fear into faith in order to live a divinely guided life. Each story and lesson in the book guides listeners to release the blocks to what they most long for: happiness, security, and clear direction.</p>
<p>
<a href="https://www.amazon.com/Universe-Has-Your-Back-Transform/dp/B01LY5W61P/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<p style="text-align: left;">These audio books are all top quality offerings and some of them are incredible bargains too!

</div>

<div id="Paperbacks" class="tabcontent">
<br>
<b>Fergus and Me</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Fergus-Me-Tale-Bezzie-Mates/dp/1521115583/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="http://www.whitedovebooks.co.uk/plugin/images/Fergus-Medium.jpg" alt="" border="0" /></a>Surviving in a tough urban school meant not only understanding how to deal with the kids who were out to prove themselves, but learning to handle those teachers who seemed hell-bent on breaking the human spirit. The inspiring story of two young boys growing up in Liverpool in the sixties, this book traces the rites of passage of two friends who stick together, through thick and thin, learning how to fend for themselves under a ruthless and unjust regime.</p>
<p>
<a href="https://www.amazon.com/Fergus-Me-Tale-Bezzie-Mates/dp/1521115583/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>Chicken Soup for the Soul</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Chicken-Soup-Soul-Inspiratinal-Blessings/dp/1935096567/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51ziVEIP2uL._SX326_BO1,204,203,200_.jpg" alt="" width="120" border="0" /></a>This book will inspire and uplift readers with its stories of optimism, faith, and strength. In bad times, and good, readers will be heartened to keep a positive attitude. A great start to the New Year. Every cloud has a silver lining. And the stories in this book will encourage readers to stay positive, because there is always a bright side. This book continues Chicken Soup for the Soul's focus on hope, reminding us that each day holds something to be thankful for.</p>
<p>
<a href="https://www.amazon.com/Chicken-Soup-Soul-Inspirational-Blessings/dp/1935096567/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>Awaken the Giant Within</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Awaken-Giant-Within-Immediate-Emotional/dp/0671791540/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51lXzR%2BxTOL._SX327_BO1,204,203,200_.jpg" width="120" border="0" /></a>Wake up and take control of your life! From the bestselling author of Inner Strength, Unlimited Power, and MONEY Master the Game, Anthony Robbins shows you his most effective strategies and techniques for mastering your emotions, your body, your relationships, your finances, and your life. He provides a step-by-step program teaching fundamental lessons that will enable you to take control of your life, and harness the forces that shape your destiny.</p>
<p>
<a href="https://www.amazon.com/Awaken-Giant-Within-Immediate-Emotional/dp/0671791540/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>15 Secrets Successful People Know</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Secrets-Successful-People-Management-Straight/dp/0985056436/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51P3mTpugwL._SX322_BO1,204,203,200_.jpg" alt="" width="120" border="0" /></a>What if a few new habits could dramatically increase your productivity? What if you could get an an hour a day to read, exercise, or to spend with your family. New York Times bestselling author, Kevin Kruse, presents the remarkable findings of his study of ultra-productive people. Based on interviews with billionaires, Olympic athletes, straight-A students and over 200 entrepreneurs and answers the question: what are the secrets to extreme productivity?</p>
<p>
<a href="https://www.amazon.com/Secrets-Successful-People-Management-Straight/dp/0985056436/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>#Girlboss</b>
<p style="text-align: left;"><a href="https://www.amazon.com/GIRLBOSS-Sophia-Amoruso/dp/1591847931/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51%2Bn7FJ1XlL._SX331_BO1,204,203,200_.jpg" alt="" width="120" border="0" /></a>Sophia Amoruso spent her teens hitchhiking, committing petty theft, and scrounging in dumpsters for leftover bagels. Today, she's the founder and executive chairman of Nasty Gal, a $100-million-plus fashion retailer. She proves that being successful isn't about where you went to college or how popular you were in high school. It's about trusting your instincts and following your gut; knowing which rules to follow, which to break and when to let your freak flag fly.</p>
<p>
<a href="https://www.amazon.com/GIRLBOSS-Sophia-Amoruso/dp/1591847931/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>How to Win at the Sport of Business</b>
<p style="text-align: left;"><a href="https://www.amazon.com/How-Win-Sport-Business-Can/dp/1626810915/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51jSEGGeGJL._SX308_BO1,204,203,200_.jpg" alt="" width="120" border="0" /></a>Using the best material from his blog, Cuban provides a catalogue of insider knowledge on what it takes to become a thriving entrepreneur. He tells his own rags-to-riches story of how he went from selling powdered milk and sleeping on friends' couches to owning his own company and becoming a multi-billion dollar success story. His unconventional yet highly effective ideas on how to build a successful business offer entrepreneurs at any stage of their careers a huge edge over their competitors.</p>
<p>
<a href="https://www.amazon.com/How-Win-Sport-Business-Can/dp/1626810915/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<p style="text-align: left;">If you are looking for a great read, any of these top quality, motivational paperbacks would be a very nice addition to your personal library.

</div>

<div id="Best Sellers" class="tabcontent">
<br>
<b>Zig Ziglar's Life Lifters</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Zig-Ziglars-Life-Lifters-Ziglar-ebook/dp/B005XOW0JM/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-eu.ssl-images-amazon.com/images/I/41gln2gbmqL.jpg" alt="" width="120" border="0" /></a>For over thirty years, Zig Ziglar was in the business of encouragement. This beloved author and speaker has shared his wisdom, his sorrows, his humor, and his faith with millions who are the better for it. This book offers vignettes on various topics such as attitude, love, inspiration, relationships, goal setting, and motivation that will help you become 'excited about your country, your family, and your future' and will provide you a lift in your attitude and enjoyment of life.</p>
<p>
<a href="https://www.amazon.com/Zig-Ziglars-Life-Lifters-Ziglar-ebook/dp/B005XOW0JM/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>How to Win Friends and Influence People</b>
<p style="text-align: left;"><a href="https://www.amazon.com/How-Win-Friends-Influence-People/dp/0671027034/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51X7dEUFgoL._SX320_BO1,204,203,200_.jpg" alt="" width="120" border="0" /></a>Dale Carnegie says You can make someone want to do what you want them to do by seeing the situation from the other person's point of view and "arousing in the other person an eager want." You learn how to make people like you, win people over to your way of thinking, and change people without causing offense or arousing resentment. For instance, "let the other person feel that the idea is his or hers," and "talk about your own mistakes before criticizing others."</p>
<p>
<a href="https://www.amazon.com/How-Win-Friends-Influence-People/dp/0671027034/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>My Psychology for Successful Living</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Philosophy-Successful-Living-Jim-Rohn-ebook/dp/B004OL2L0I/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51UHEUrSKjL._SX310_BO1,204,203,200_.jpg" alt="" width="120" border="0" /></a>Before he passed away, Jim Rohn influenced more than 5 million people in all corners of the world. He was counted as a mentor by thousands including Tony Robbins, Les Brown, Harvey Mackay and Mark Victor Hansen. Jim was one of the most powerful and memorable listening experiences ever because he could take ageless principles and present them in such a simple way. That positive impact continues today with this special edition of Jim's books.</p>
<p>
<a href="https://www.amazon.com/Philosophy-Successful-Living-Jim-Rohn-ebook/dp/B004OL2L0I/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>The 7 Habits of Highly Effective People</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Habits-Highly-Effective-People-Interactive-ebook/dp/B01069X4H0/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-eu.ssl-images-amazon.com/images/I/51WBaVgLYgL.jpg" alt="" width="120" border="0" /></a>This twenty-fifth anniversary edition of Stephen Covey's classic commemorates the wisdom of the 7 Habits. One of the most inspiring books ever written, this book has captivated readers for 25 years. It has transformed the lives of Presidents and CEOs, educators and parents. An updated interactive edition of Covey's most famous work, supported with videos, explanatory infographics, self-tests and more, is here to continue those valuable lessons.</p>
<p>
<a href="https://www.amazon.com/Habits-Highly-Effective-People-Interactive-ebook/dp/B01069X4H0/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>How to Win Friends and Influence People</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Power-Positive-Thinking-Norman-Vincent/dp/0743234804/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51cFV6qAX-L._SY346_.jpg" alt="" width="120" border="0" /></a>An international bestseller with over five million copies in print, this book has helped people around the world to achieve fulfilment in their lives through Dr. Norman Vincent Peale's powerful message of faith and inspiration. In this phenomenal bestseller, he demonstrates the power of faith in action. With the practical techniques outlined in this book, you can energize your life and give yourself the initiative needed to achieve your ambitions and hopes. </p>
<p>
<a href="https://www.amazon.com/Power-Positive-Thinking-Norman-Vincent/dp/0743234804/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<b>You'll See It When You Believe It</b>
<p style="text-align: left;"><a href="https://www.amazon.com/Youll-See-When-You-Believe-ebook/dp/B0063HBNIC/&amp;tag=$lepid" target="_blank"><img class="alignleft" style="float: left;" src="https://images-na.ssl-images-amazon.com/images/I/51FOlWRC9EL.jpg" alt="" width="120" border="0" /></a>In this bestselling thought-provoking book, Dr. Wayne Dyer stretches beyond self-help to self-realisation. To do so, he embarks on a journey to activate our minds. Using anecdotes and examples, writing with wit and compassion, and drawing on his own amazing life story, Dr. Dyer has, once again, written an inspirational self-help book that explores how to achieve personal transformation through the visualisation of thought - and teaches us that believing is seeing.</p>
<p>
<a href="https://www.amazon.com/Youll-See-When-You-Believe-ebook/dp/B0063HBNIC/&amp;tag=$lepid" target="_blank"><img src="http://www.whitedovebooks.co.uk/plugin/images/button.png" alt="" border="0" /></a>
</p>
<p style="text-align: left;">The books on this page are all classics, and bestsellers, within the personal development genre and every one of them is well worth reading.

</div>

</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html>

HTML;

  }
     
add_action( 'admin_menu', 'eas_plugin_menu' );

function eas_plugin_menu() {
	add_options_page( 'Free Books Section Options', 'Free Books Section', 'manage_options', _FILE_eas, 'eas_plugin_options' );
      }

function eas_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
		
?>

<div class="wrap">
<h1>Free Books Section Plugin</h1>
<?php screen_icon(); ?>
<h2>Settings</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>

<table width="510">
<tr valign="top">

<th width="92" scope="row">Amazon.com Associate ID:</th>
<td width="406">
<input name="eas_data" type="text" id="eas_data"
value="<?php echo get_option('eas_data'); ?>" />

</td>
</tr>
</table>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="eas_data" />
<p>

<input name="update" type="submit" value="Save Changes">

</p>

</form>

<p><H2>Instructions</H2></p>

<p>This plugin enables you to provide your visitors with quality recommendations and earn commissions via Amazon.</p> 
<p>All you need to do is get your Amazon.com Associate ID and follow these instructions:</p>

<p>1. Enter & Save Your Amazon.com Associate ID (Above)</p>
<p>2. Create a New Page (Pages/Add New)</p>
<p>3. Insert the Shortcode: [free_books_section] and Save the page</p>
<p>4. Link the Page to Your Navigation Menu (Appearance/Menus)</p>

<form>
<br>

<input type="button" value="Join Amazon Associates" onClick="window.open('https://affiliate-program.amazon.com');">

</form>

<p>If you don't have an Amazon.com Associates ID, use the button above to obtain one - it's free to join.</p>

<p>If you would like to add your Associate ID for additional Amazon stores, add a geo-targeting plugin, such as <a title="Contact" href="https://wordpress.org/plugins/amazon-affiliate-link-globalizer/" target="_blank">Amazon Link Globalizer</a>.

</div>

<?php } ?>