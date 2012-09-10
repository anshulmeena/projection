<style>
body {
    padding-bottom: 40px;
    padding-top: 60px;
}
</style>
<?php
include_once 'header/header.php';
?>
<div
	class="container">

	<!-- Docs nav    ================================================== -->
	<div class="row">
		<div class="span3 bs-docs-sidebar">
			<ul class="nav nav-list bs-docs-sidenav affix">
				<li class="active"><a href="#download-bootstrap"><i
						class="icon-chevron-right"></i> Download</a></li>
				<li class=""><a href="#file-structure"><i class="icon-chevron-right"></i>
						File structure</a></li>
				<li class=""><a href="#contents"><i class="icon-chevron-right"></i>
						What's included</a></li>
				<li class=""><a href="#html-template"><i class="icon-chevron-right"></i>
						HTML template</a></li>
				<li class=""><a href="#what-next"><i class="icon-chevron-right"></i>
						What next?</a></li>
			</ul>
		</div>
		<div class="span9">

			<!-- Download ================================================== -->
			<section id="download-bootstrap">
				<div class="page-header">
					<h1>1. Download</h1>
				</div>
				<p class="lead">
					Before downloading, be sure to have a code editor (we recommend <a
						href="http://sublimetext.com/2">Sublime Text 2</a>) and some
					working knowledge of HTML and CSS. We won't walk through the source
					files here, but they are available for download. We'll focus on
					getting started with the compiled Bootstrap files.
				</p>

				<div class="row-fluid">
					<div class="span6">
						<h2>Download compiled</h2>
						<p>
							<strong>Fastest way to get started:</strong> get the compiled and
							minified versions of our CSS, JS, and images. No docs or original
							source files.
						</p>
						<p>
							<a
								onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download compiled']);"
								href="assets/bootstrap.zip" class="btn btn-large btn-primary">Download
								Bootstrap</a>
						</p>
					</div>
					<div class="span6">
						<h2>Download source</h2>
						<p>Get the original files for all CSS and JavaScript, along with a
							local copy of the docs by downloading the latest version directly
							from GitHub.</p>
						<p>
							<a
								onclick="_gaq.push(['_trackEvent', 'Getting started', 'Download', 'Download source']);"
								href="https://github.com/twitter/bootstrap/zipball/master"
								class="btn btn-large">Download Bootstrap source</a>
						</p>
					</div>
				</div>
			</section>



			<!-- File structure ================================================== -->
			<section id="file-structure">
				<div class="page-header">
					<h1>2. File structure</h1>
				</div>
				<p class="lead">Within the download you'll find the following file
					structure and contents, logically grouping common assets and
					providing both compiled and minified variations.</p>
				<p>Once downloaded, unzip the compressed folder to see the structure
					of (the compiled) Bootstrap. You'll see something like this:</p>
				<pre class="prettyprint">
					<span class="pln">  bootstrap</span><span class="pun">/</span><span
						class="pln">
  </span><span class="pun">├──</span><span class="pln"> css</span><span
						class="pun">/</span><span class="pln">
  </span><span class="pun">│</span><span class="pln">   </span><span
						class="pun">├──</span><span class="pln"> bootstrap</span><span
						class="pun">.</span><span class="pln">css
  </span><span class="pun">│</span><span class="pln">   </span><span
						class="pun">├──</span><span class="pln"> bootstrap</span><span
						class="pun">.</span><span class="pln">min</span><span class="pun">.</span><span
						class="pln">css
  </span><span class="pun">├──</span><span class="pln"> js</span><span
						class="pun">/</span><span class="pln">
  </span><span class="pun">│</span><span class="pln">   </span><span
						class="pun">├──</span><span class="pln"> bootstrap</span><span
						class="pun">.</span><span class="pln">js
  </span><span class="pun">│</span><span class="pln">   </span><span
						class="pun">├──</span><span class="pln"> bootstrap</span><span
						class="pun">.</span><span class="pln">min</span><span class="pun">.</span><span
						class="pln">js
  </span><span class="pun">├──</span><span class="pln"> img</span><span
						class="pun">/</span><span class="pln">
  </span><span class="pun">│</span><span class="pln">   </span><span
						class="pun">├──</span><span class="pln"> glyphicons</span><span
						class="pun">-</span><span class="pln">halflings</span><span
						class="pun">.</span><span class="pln">png
  </span><span class="pun">│</span><span class="pln">   </span><span
						class="pun">├──</span><span class="pln"> glyphicons</span><span
						class="pun">-</span><span class="pln">halflings</span><span
						class="pun">-</span><span class="pln">white</span><span
						class="pun">.</span><span class="pln">png
  </span><span class="pun">└──</span><span class="pln"> README</span><span
						class="pun">.</span><span class="pln">md</span>
				</pre>
				<p>
					This is the most basic form of Bootstrap: compiled files for quick
					drop-in usage in nearly any web project. We provide compiled CSS
					and JS (
					<code>bootstrap.*</code>
					), as well as compiled and minified CSS and JS (
					<code>bootstrap.min.*</code>
					). The image files are compressed using <a
						href="http://imageoptim.com/">ImageOptim</a>, a Mac app for
					compressing PNGs.
				</p>
				<p>Please note that all JavaScript plugins require jQuery to be
					included.</p>
			</section>



			<!-- Contents ================================================== -->
			<section id="contents">
				<div class="page-header">
					<h1>3. What's included</h1>
				</div>
				<p class="lead">
					Bootstrap comes equipped with HTML, CSS, and JS for all sorts of
					things, but they can be summarized with a handful of categories
					visible at the top of the <a href="http://getbootstrap.com">Bootstrap
						documentation</a>.
				</p>

				<h2>Docs sections</h2>
				<h4>
					<a href="http://twitter.github.com/bootstrap/scaffolding.html">Scaffolding</a>
				</h4>
				<p>Global styles for the body to reset type and background, link
					styles, grid system, and two simple layouts.</p>
				<h4>
					<a href="http://twitter.github.com/bootstrap/base-css.html">Base
						CSS</a>
				</h4>
				<p>
					Styles for common HTML elements like typography, code, tables,
					forms, and buttons. Also includes <a href="http://glyphicons.com">Glyphicons</a>,
					a great little icon set.
				</p>
				<h4>
					<a href="http://twitter.github.com/bootstrap/components.html">Components</a>
				</h4>
				<p>Basic styles for common interface components like tabs and pills,
					navbar, alerts, page headers, and more.</p>
				<h4>
					<a href="http://twitter.github.com/bootstrap/javascript.html">Javascript
						plugins</a>
				</h4>
				<p>Similar to Components, these Javascript plugins are interactive
					components for things like tooltips, popovers, modals, and more.</p>

				<h2>List of components</h2>
				<p>
					Together, the <strong>Components</strong> and <strong>Javascript
						plugins</strong> sections provide the following interface
					elements:
				</p>
				<ul>
					<li>Button groups</li>
					<li>Button dropdowns</li>
					<li>Navigational tabs, pills, and lists</li>
					<li>Navbar</li>
					<li>Labels</li>
					<li>Badges</li>
					<li>Page headers and hero unit</li>
					<li>Thumbnails</li>
					<li>Alerts</li>
					<li>Progress bars</li>
					<li>Modals</li>
					<li>Dropdowns</li>
					<li>Tooltips</li>
					<li>Popovers</li>
					<li>Accordion</li>
					<li>Carousel</li>
					<li>Typeahead</li>
				</ul>
				<p>In future guides, we may walk through these components
					individually in more detail. Until then, look for each of these in
					the documentation for information on how to utilize and customize
					them.</p>
			</section>



			<!-- HTML template ================================================== -->
			<section id="html-template">
				<div class="page-header">
					<h1>4. Basic HTML template</h1>
				</div>
				<p class="lead">
					With a brief intro into the contents out of the way, we can focus
					putting Bootstrap to use. To do that, we'll utilize a basic HTML
					template that includes everything we mentioned in the <a
						href="#file-structure">File structure</a>.
				</p>
				<p>
					Now, here's a look at a <strong>typical HTML file</strong>:
				</p>
				<pre class="prettyprint linenums">
					<ol class="linenums">
						<li class="L0"><span class="dec">&lt;!DOCTYPE html&gt;</span>
						</li>
						<li class="L1"><span class="tag">&lt;html&gt;</span>
						</li>
						<li class="L2"><span class="pln">  </span><span class="tag">&lt;head&gt;</span>
						</li>
						<li class="L3"><span class="pln">    </span><span class="tag">&lt;title&gt;</span><span
							class="pln">Bootstrap 101 Template</span><span class="tag">&lt;/title&gt;</span>
						</li>
						<li class="L4"><span class="pln">  </span><span class="tag">&lt;/head&gt;</span>
						</li>
						<li class="L5"><span class="pln">  </span><span class="tag">&lt;body&gt;</span>
						</li>
						<li class="L6"><span class="pln">    </span><span class="tag">&lt;h1&gt;</span><span
							class="pln">Hello, world!</span><span class="tag">&lt;/h1&gt;</span>
						</li>
						<li class="L7"><span class="pln">    </span><span class="tag">&lt;script</span><span
							class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span
							class="atv">"http://code.jquery.com/jquery-latest.js"</span><span
							class="tag">&gt;&lt;/script&gt;</span>
						</li>
						<li class="L8"><span class="pln">  </span><span class="tag">&lt;/body&gt;</span>
						</li>
						<li class="L9"><span class="tag">&lt;/html&gt;</span>
						</li>
					</ol>
				</pre>
				<p>
					To make this <strong>a Bootstrapped template</strong>, just include
					the appropriate CSS and JS files:
				</p>
				<pre class="prettyprint linenums">
					<ol class="linenums">
						<li class="L0"><span class="dec">&lt;!DOCTYPE html&gt;</span>
						</li>
						<li class="L1"><span class="tag">&lt;html&gt;</span>
						</li>
						<li class="L2"><span class="pln">  </span><span class="tag">&lt;head&gt;</span>
						</li>
						<li class="L3"><span class="pln">    </span><span class="tag">&lt;title&gt;</span><span
							class="pln">Bootstrap 101 Template</span><span class="tag">&lt;/title&gt;</span>
						</li>
						<li class="L4"><span class="pln">    </span><span class="com">&lt;!-- Bootstrap --&gt;</span>
						</li>
						<li class="L5"><span class="pln">    </span><span class="tag">&lt;link</span><span
							class="pln"> </span><span class="atn">href</span><span
							class="pun">=</span><span class="atv">"css/bootstrap.min.css"</span><span
							class="pln"> </span><span class="atn">rel</span><span class="pun">=</span><span
							class="atv">"stylesheet"</span><span class="tag">&gt;</span>
						</li>
						<li class="L6"><span class="pln">  </span><span class="tag">&lt;/head&gt;</span>
						</li>
						<li class="L7"><span class="pln">  </span><span class="tag">&lt;body&gt;</span>
						</li>
						<li class="L8"><span class="pln">    </span><span class="tag">&lt;h1&gt;</span><span
							class="pln">Hello, world!</span><span class="tag">&lt;/h1&gt;</span>
						</li>
						<li class="L9"><span class="pln">    </span><span class="tag">&lt;script</span><span
							class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span
							class="atv">"http://code.jquery.com/jquery-latest.js"</span><span
							class="tag">&gt;&lt;/script&gt;</span>
						</li>
						<li class="L0"><span class="pln">    </span><span class="tag">&lt;script</span><span
							class="pln"> </span><span class="atn">src</span><span class="pun">=</span><span
							class="atv">"js/bootstrap.min.js"</span><span class="tag">&gt;&lt;/script&gt;</span>
						</li>
						<li class="L1"><span class="pln">  </span><span class="tag">&lt;/body&gt;</span>
						</li>
						<li class="L2"><span class="tag">&lt;/html&gt;</span>
						</li>
					</ol>
				</pre>
				<p>
					<strong>And you're set!</strong> With those two files added, you
					can begin to develop any site or application with Bootstrap.
				</p>
			</section>

			<section id="what-next">
				<div class="page-header">
					<h1>What next?</h1>
				</div>
				<p class="lead">Head to the docs for information, examples, and code
					snippets, or take the next leap and customize Bootstrap for any
					upcoming project.</p>
				<a
					onclick="_gaq.push(['_trackEvent', 'Getting started', 'Next steps', 'Visit docs']);"
					href="./scaffolding.html" class="btn btn-large btn-primary">Visit
					the Bootstrap docs</a> <a
					onclick="_gaq.push(['_trackEvent', 'Getting started', 'Next steps', 'Customize']);"
					style="margin-left: 5px;" href="./customize.html"
					class="btn btn-large">Customize Bootstrap</a>
			</section>
		</div>
	</div>
</div>
<?php 
		include_once 'footer/footer.php';
	?>
</body>
</html>
