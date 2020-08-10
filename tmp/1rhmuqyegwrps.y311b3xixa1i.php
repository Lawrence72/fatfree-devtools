<h1>Initialize Environment Setup</h1>
<p>Welcome to the Fat-Free Devtools Setup! Fat-Free is a loosely opinionated framework for PHP. You can configure the your project in an unlimited amount of possibilities because of how simple the framework is itself. Take the below code for example:</p>
<pre><code>
&lt;?php
	$fw = Base::instance();
	$fw->addRoute('GET /', function() { echo json_encode([ 'hello' => 'world!' ]); });
	$fw->run();
</code></pre>
<p>The above code is complete to render the <code>/</code> route to echo out a JSON response.</p>
<p>The goal of these dev tools are to help create projects in a slightly more opinionated manner. <b>YOU DO NOT HAVE TO FOLLOW EVERYTHING IN THIS SETUP FOR YOUR PROJECT!</b> You can simple start your project if you want, and then create your own controllers, routes, config files, whatever you want!</p>
<p>With all this said, lets go ahead and get the environment setup.</p>
<a href="/init-environment/title" type="submit" class="btn btn-primary mb-5">Next</a>