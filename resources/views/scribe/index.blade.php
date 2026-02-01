<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://127.0.0.1:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.6.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.6.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-jenis_tryout">
                                <a href="#endpoints-GETapi-jenis_tryout">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-paket_tryout">
                                <a href="#endpoints-GETapi-paket_tryout">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-paket_tryout--nama_paket_tryout-">
                                <a href="#endpoints-GETapi-paket_tryout--nama_paket_tryout-">GET api/paket_tryout/{nama_paket_tryout}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-paket_tryout-premium--premium-">
                                <a href="#endpoints-GETapi-paket_tryout-premium--premium-">GET api/paket_tryout/premium/{premium}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-paket_tryout-event--event-">
                                <a href="#endpoints-GETapi-paket_tryout-event--event-">GET api/paket_tryout/event/{event}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-soals">
                                <a href="#endpoints-GETapi-soals">GET api/soals</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-soals--id-">
                                <a href="#endpoints-GETapi-soals--id-">GET api/soals/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-soals-paket--paket-">
                                <a href="#endpoints-GETapi-soals-paket--paket-">GET api/soals/paket/{paket}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-paket_soal">
                                <a href="#endpoints-GETapi-paket_soal">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-paket_soal--nama_paket_soal-">
                                <a href="#endpoints-GETapi-paket_soal--nama_paket_soal-">GET api/paket_soal/{nama_paket_soal}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: February 1, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://127.0.0.1:8000</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-jenis_tryout">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-jenis_tryout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/jenis_tryout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/jenis_tryout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-jenis_tryout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;jenis_tryout&quot;: &quot;CPNS&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;jenis_tryout&quot;: &quot;SIMAK UI&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;jenis_tryout&quot;: &quot;Tes Bakat Skolastik&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://127.0.0.1:8000/api/jenis_tryout?page=1&quot;,
        &quot;last&quot;: &quot;http://127.0.0.1:8000/api/jenis_tryout?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/jenis_tryout?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://127.0.0.1:8000/api/jenis_tryout&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 3,
        &quot;total&quot;: 3
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-jenis_tryout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-jenis_tryout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jenis_tryout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-jenis_tryout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jenis_tryout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-jenis_tryout" data-method="GET"
      data-path="api/jenis_tryout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-jenis_tryout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-jenis_tryout"
                    onclick="tryItOut('GETapi-jenis_tryout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-jenis_tryout"
                    onclick="cancelTryOut('GETapi-jenis_tryout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-jenis_tryout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/jenis_tryout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-jenis_tryout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-jenis_tryout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-paket_tryout">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-paket_tryout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/paket_tryout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/paket_tryout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-paket_tryout">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;jenis_tryout&quot;: &quot;CPNS&quot;,
            &quot;nama_paket_tryout&quot;: &quot;CPNS 2026&quot;,
            &quot;is_premium&quot;: &quot;0&quot;,
            &quot;harga&quot;: &quot;0&quot;,
            &quot;is_event&quot;: &quot;0&quot;,
            &quot;tanggal_rilis&quot;: &quot;2026-02-01&quot;,
            &quot;tanggal_expired&quot;: &quot;2040-01-02&quot;,
            &quot;tahun&quot;: &quot;2026&quot;,
            &quot;rate&quot;: &quot;0&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;jenis_tryout&quot;: &quot;CPNS&quot;,
            &quot;nama_paket_tryout&quot;: &quot;CPNS 2025&quot;,
            &quot;is_premium&quot;: &quot;1&quot;,
            &quot;harga&quot;: &quot;50000&quot;,
            &quot;is_event&quot;: &quot;0&quot;,
            &quot;tanggal_rilis&quot;: &quot;2026-01-31&quot;,
            &quot;tanggal_expired&quot;: &quot;2029-10-10&quot;,
            &quot;tahun&quot;: &quot;2026&quot;,
            &quot;rate&quot;: &quot;0&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://127.0.0.1:8000/api/paket_tryout?page=1&quot;,
        &quot;last&quot;: &quot;http://127.0.0.1:8000/api/paket_tryout?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/paket_tryout?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://127.0.0.1:8000/api/paket_tryout&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-paket_tryout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-paket_tryout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paket_tryout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-paket_tryout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paket_tryout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-paket_tryout" data-method="GET"
      data-path="api/paket_tryout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-paket_tryout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-paket_tryout"
                    onclick="tryItOut('GETapi-paket_tryout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-paket_tryout"
                    onclick="cancelTryOut('GETapi-paket_tryout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-paket_tryout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/paket_tryout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-paket_tryout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-paket_tryout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-paket_tryout--nama_paket_tryout-">GET api/paket_tryout/{nama_paket_tryout}</h2>

<p>
</p>



<span id="example-requests-GETapi-paket_tryout--nama_paket_tryout-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/paket_tryout/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/paket_tryout/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-paket_tryout--nama_paket_tryout-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-paket_tryout--nama_paket_tryout-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-paket_tryout--nama_paket_tryout-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paket_tryout--nama_paket_tryout-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-paket_tryout--nama_paket_tryout-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paket_tryout--nama_paket_tryout-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-paket_tryout--nama_paket_tryout-" data-method="GET"
      data-path="api/paket_tryout/{nama_paket_tryout}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-paket_tryout--nama_paket_tryout-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-paket_tryout--nama_paket_tryout-"
                    onclick="tryItOut('GETapi-paket_tryout--nama_paket_tryout-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-paket_tryout--nama_paket_tryout-"
                    onclick="cancelTryOut('GETapi-paket_tryout--nama_paket_tryout-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-paket_tryout--nama_paket_tryout-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/paket_tryout/{nama_paket_tryout}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-paket_tryout--nama_paket_tryout-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-paket_tryout--nama_paket_tryout-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nama_paket_tryout</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nama_paket_tryout"                data-endpoint="GETapi-paket_tryout--nama_paket_tryout-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-paket_tryout-premium--premium-">GET api/paket_tryout/premium/{premium}</h2>

<p>
</p>



<span id="example-requests-GETapi-paket_tryout-premium--premium-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/paket_tryout/premium/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/paket_tryout/premium/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-paket_tryout-premium--premium-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-paket_tryout-premium--premium-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-paket_tryout-premium--premium-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paket_tryout-premium--premium-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-paket_tryout-premium--premium-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paket_tryout-premium--premium-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-paket_tryout-premium--premium-" data-method="GET"
      data-path="api/paket_tryout/premium/{premium}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-paket_tryout-premium--premium-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-paket_tryout-premium--premium-"
                    onclick="tryItOut('GETapi-paket_tryout-premium--premium-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-paket_tryout-premium--premium-"
                    onclick="cancelTryOut('GETapi-paket_tryout-premium--premium-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-paket_tryout-premium--premium-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/paket_tryout/premium/{premium}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-paket_tryout-premium--premium-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-paket_tryout-premium--premium-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>premium</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="premium"                data-endpoint="GETapi-paket_tryout-premium--premium-"
               value="consequatur"
               data-component="url">
    <br>
<p>The premium. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-paket_tryout-event--event-">GET api/paket_tryout/event/{event}</h2>

<p>
</p>



<span id="example-requests-GETapi-paket_tryout-event--event-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/paket_tryout/event/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/paket_tryout/event/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-paket_tryout-event--event-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-paket_tryout-event--event-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-paket_tryout-event--event-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paket_tryout-event--event-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-paket_tryout-event--event-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paket_tryout-event--event-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-paket_tryout-event--event-" data-method="GET"
      data-path="api/paket_tryout/event/{event}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-paket_tryout-event--event-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-paket_tryout-event--event-"
                    onclick="tryItOut('GETapi-paket_tryout-event--event-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-paket_tryout-event--event-"
                    onclick="cancelTryOut('GETapi-paket_tryout-event--event-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-paket_tryout-event--event-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/paket_tryout/event/{event}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-paket_tryout-event--event-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-paket_tryout-event--event-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>event</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="event"                data-endpoint="GETapi-paket_tryout-event--event-"
               value="consequatur"
               data-component="url">
    <br>
<p>The event. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-soals">GET api/soals</h2>

<p>
</p>



<span id="example-requests-GETapi-soals">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/soals" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/soals"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-soals">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;GERHANA : BULAN = ... : &hellip;&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;Banjir : Air&quot;,
                &quot;B&quot;: &quot;Fajar : Matahari&quot;,
                &quot;C&quot;: &quot;Awan : Hujan&quot;,
                &quot;D&quot;: &quot;Erupsi : Gunung&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;mudah&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan4&quot;,
            &quot;pembahasan&quot;: &quot;Gerhana adalah fenomena yang terjadi pada bulan, sebagaimana erupsi adalah fenomena yang terjadi pada gunung.&quot;,
            &quot;hint&quot;: &quot;hint satu&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Jika semua mahasiswa memakai jaket almamater, dan sebagian orang yang memakai jaket almamater membawa tas. Maka kesimpulan yang tepat adalah&hellip;&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;Mahasiswa tidak ada yang membawa tas&quot;,
                &quot;B&quot;: &quot;Semua mahasiswa membawa tas&quot;,
                &quot;C&quot;: &quot;Semua orang yang membawa tas adalah mahasiswa&quot;,
                &quot;D&quot;: &quot;Sebagian mahasiswa membawa tas&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;sedang&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan4&quot;,
            &quot;pembahasan&quot;: &quot;Karena semua mahasiswa adalah pemakai jaket almamater dan sebagian pemakai jaket membawa tas, maka ada sebagian mahasiswa yang membawa tas.&quot;,
            &quot;hint&quot;: &quot;hint 2&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Lanjutkan deret angka berikut:\n2, 3, 5, 8, 13, 21, ...&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;29&quot;,
                &quot;B&quot;: &quot;34&quot;,
                &quot;C&quot;: &quot;35&quot;,
                &quot;D&quot;: &quot;32&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;sulit&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan2&quot;,
            &quot;pembahasan&quot;: &quot;Deret ini adalah deret Fibonacci, di mana angka berikutnya adalah hasil penjumlahan dua angka sebelumnya: $13 + 21 = 34$.&quot;,
            &quot;hint&quot;: &quot;hint 3&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Sebuah toko memberikan diskon ganda sebesar 20% dan dilanjutkan diskon 10%. Berapakah total diskon sebenarnya yang diterima pembeli?&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;28%&quot;,
                &quot;B&quot;: &quot;25%&quot;,
                &quot;C&quot;: &quot;30%&quot;,
                &quot;D&quot;: &quot;22%&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;mudah&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan1&quot;,
            &quot;pembahasan&quot;: &quot;Harga awal $100\\%$ didiskon $20\\%$ menjadi $80\\%$, lalu $80\\%$ didiskon $10\\%$ (yaitu $8\\%$) menjadi $72\\%$. Total diskon adalah $100\\% - 72\\% = 28\\%$.&quot;,
            &quot;hint&quot;: &quot;hint 4&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Jika x=15 persen dari 3000 dan y=30 persen dari 1500, maka...&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;x&lt;y&quot;,
                &quot;B&quot;: &quot;x&gt;y&quot;,
                &quot;C&quot;: &quot;x=y&quot;,
                &quot;D&quot;: &quot;Hubungan x dan y tidak dapat ditentukan&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;sedang&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan3&quot;,
            &quot;pembahasan&quot;: &quot;Nilai $x = 0,15 \\times 3000 = 450$ dan $y = 0,30 \\times 1500 = 450$, maka nilainya identik.&quot;,
            &quot;hint&quot;: &quot;hint 5&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Analogi Kata\n\nMAKAN : KENYANG = ... : &hellip;&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;Belajar : Pandai&quot;,
                &quot;B&quot;: &quot;Lampu : Terang&quot;,
                &quot;C&quot;: &quot;Tidur : Mimpi&quot;,
                &quot;D&quot;: &quot;Minum : Haus&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;sulit&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan1&quot;,
            &quot;pembahasan&quot;: &quot;Hubungan sebab-akibat: makan menyebabkan kenyang, sebagaimana belajar menyebabkan pandai.&quot;,
            &quot;hint&quot;: &quot;hint 6&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Semua pohon di kebun berdaun hijau. Sebagian pohon di kebun adalah pohon mangga. Kesimpulan yang benar adalah&hellip;&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;Semua pohon mangga berdaun hijau&quot;,
                &quot;B&quot;: &quot;Pohon mangga tidak ada yang di kebun&quot;,
                &quot;C&quot;: &quot;Sebagian pohon mangga tidak berdaun hijau&quot;,
                &quot;D&quot;: &quot;Hanya pohon mangga yang berdaun hijau&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;mudah&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan1&quot;,
            &quot;pembahasan&quot;: &quot;Ini adalah kesimpulan yang paling tepat karena pohon mangga adalah bagian dari semua pohon di kebun yang berdaun hijau.&quot;,
            &quot;hint&quot;: &quot;hint 7&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Lanjutkan deret berikut: A, C, E, G, &hellip;&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;J&quot;,
                &quot;B&quot;: &quot;I&quot;,
                &quot;C&quot;: &quot;H&quot;,
                &quot;D&quot;: &quot;K&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;sedang&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan2&quot;,
            &quot;pembahasan&quot;: &quot;Pola deret ini meloncati satu huruf (A-b-C-d-E-f-G-h-I), maka huruf berikutnya adalah I.&quot;,
            &quot;hint&quot;: &quot;hint 8&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Seorang pekerja mampu menyelesaikan sebuah pekerjaan dalam 12 hari. Jika ada 3 pekerja dengan kecepatan yang sama, berapa lama pekerjaan tersebut selesai?&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;8 hari&quot;,
                &quot;B&quot;: &quot;36 hari&quot;,
                &quot;C&quot;: &quot;6 hari&quot;,
                &quot;D&quot;: &quot;4 hari&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;sulit&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan4&quot;,
            &quot;pembahasan&quot;: &quot;Menggunakan perbandingan berbalik nilai: $12 \\text{ hari} / 3 \\text{ pekerja} = 4 \\text{ hari}$.&quot;,
            &quot;hint&quot;: &quot;hint 9&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;soal&quot;: &quot;Berapakah hasil dari 25&times;4+100:5?&quot;,
            &quot;pilihan&quot;: {
                &quot;A&quot;: &quot;200&quot;,
                &quot;B&quot;: &quot;120&quot;,
                &quot;C&quot;: &quot;40&quot;,
                &quot;D&quot;: &quot;105&quot;,
                &quot;E&quot;: null
            },
            &quot;tingkat_kesulitan&quot;: &quot;mudah&quot;,
            &quot;url_image&quot;: null,
            &quot;jawaban&quot;: &quot;pilihan2&quot;,
            &quot;pembahasan&quot;: &quot;Perhitungannya: $(25 \\times 4) + (100 : 5) = 100 + 20 = 120$. Operasi perkalian dan pembagian didahulukan.&quot;,
            &quot;hint&quot;: &quot;hint 10&quot;,
            &quot;poin&quot;: 10,
            &quot;check_qc&quot;: &quot;Uncheck&quot;,
            &quot;nama_qc&quot;: &quot;-&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://127.0.0.1:8000/api/soals?page=1&quot;,
        &quot;last&quot;: &quot;http://127.0.0.1:8000/api/soals?page=7&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://127.0.0.1:8000/api/soals?page=2&quot;
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 7,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/soals?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/soals?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/soals?page=3&quot;,
                &quot;label&quot;: &quot;3&quot;,
                &quot;page&quot;: 3,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/soals?page=4&quot;,
                &quot;label&quot;: &quot;4&quot;,
                &quot;page&quot;: 4,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/soals?page=5&quot;,
                &quot;label&quot;: &quot;5&quot;,
                &quot;page&quot;: 5,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/soals?page=6&quot;,
                &quot;label&quot;: &quot;6&quot;,
                &quot;page&quot;: 6,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/soals?page=7&quot;,
                &quot;label&quot;: &quot;7&quot;,
                &quot;page&quot;: 7,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/soals?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: 2,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://127.0.0.1:8000/api/soals&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 10,
        &quot;total&quot;: 70
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-soals" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-soals"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-soals"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-soals" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-soals">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-soals" data-method="GET"
      data-path="api/soals"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-soals', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-soals"
                    onclick="tryItOut('GETapi-soals');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-soals"
                    onclick="cancelTryOut('GETapi-soals');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-soals"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/soals</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-soals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-soals"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-soals--id-">GET api/soals/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-soals--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/soals/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/soals/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-soals--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
        &quot;soal&quot;: &quot;GERHANA : BULAN = ... : &hellip;&quot;,
        &quot;pilihan&quot;: {
            &quot;A&quot;: &quot;Banjir : Air&quot;,
            &quot;B&quot;: &quot;Fajar : Matahari&quot;,
            &quot;C&quot;: &quot;Awan : Hujan&quot;,
            &quot;D&quot;: &quot;Erupsi : Gunung&quot;,
            &quot;E&quot;: null
        },
        &quot;tingkat_kesulitan&quot;: &quot;mudah&quot;,
        &quot;url_image&quot;: null,
        &quot;jawaban&quot;: &quot;pilihan4&quot;,
        &quot;pembahasan&quot;: &quot;Gerhana adalah fenomena yang terjadi pada bulan, sebagaimana erupsi adalah fenomena yang terjadi pada gunung.&quot;,
        &quot;hint&quot;: &quot;hint satu&quot;,
        &quot;poin&quot;: 10,
        &quot;check_qc&quot;: &quot;Uncheck&quot;,
        &quot;nama_qc&quot;: &quot;-&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-soals--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-soals--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-soals--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-soals--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-soals--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-soals--id-" data-method="GET"
      data-path="api/soals/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-soals--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-soals--id-"
                    onclick="tryItOut('GETapi-soals--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-soals--id-"
                    onclick="cancelTryOut('GETapi-soals--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-soals--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/soals/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-soals--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-soals--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-soals--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the soal. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-soals-paket--paket-">GET api/soals/paket/{paket}</h2>

<p>
</p>



<span id="example-requests-GETapi-soals-paket--paket-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/soals/paket/consequatur" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/soals/paket/consequatur"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-soals-paket--paket-">
            <blockquote>
            <p>Example response (500):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Server Error&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-soals-paket--paket-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-soals-paket--paket-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-soals-paket--paket-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-soals-paket--paket-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-soals-paket--paket-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-soals-paket--paket-" data-method="GET"
      data-path="api/soals/paket/{paket}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-soals-paket--paket-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-soals-paket--paket-"
                    onclick="tryItOut('GETapi-soals-paket--paket-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-soals-paket--paket-"
                    onclick="cancelTryOut('GETapi-soals-paket--paket-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-soals-paket--paket-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/soals/paket/{paket}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-soals-paket--paket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-soals-paket--paket-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>paket</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="paket"                data-endpoint="GETapi-soals-paket--paket-"
               value="consequatur"
               data-component="url">
    <br>
<p>The paket. Example: <code>consequatur</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-paket_soal">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-paket_soal">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/paket_soal" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/paket_soal"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-paket_soal">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;nama_paket_tryout&quot;: &quot;CPNS 2026&quot;,
            &quot;nama_paket_soal&quot;: &quot;TIU CPNS 2026&quot;,
            &quot;deskripsi&quot;: &quot;TIU ADALAH Tes Ilmu Umum&quot;,
            &quot;durasi&quot;: &quot;60&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;nama_paket_tryout&quot;: &quot;CPNS 2026&quot;,
            &quot;nama_paket_soal&quot;: &quot;TWK 2026&quot;,
            &quot;deskripsi&quot;: &quot;TWK ADALAH TES WAWASAN KEBANGSAAN&quot;,
            &quot;durasi&quot;: &quot;90&quot;
        }
    ],
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://127.0.0.1:8000/api/paket_soal?page=1&quot;,
        &quot;last&quot;: &quot;http://127.0.0.1:8000/api/paket_soal?page=1&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: null
    },
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 1,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://127.0.0.1:8000/api/paket_soal?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;page&quot;: 1,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;page&quot;: null,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://127.0.0.1:8000/api/paket_soal&quot;,
        &quot;per_page&quot;: 10,
        &quot;to&quot;: 2,
        &quot;total&quot;: 2
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-paket_soal" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-paket_soal"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paket_soal"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-paket_soal" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paket_soal">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-paket_soal" data-method="GET"
      data-path="api/paket_soal"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-paket_soal', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-paket_soal"
                    onclick="tryItOut('GETapi-paket_soal');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-paket_soal"
                    onclick="cancelTryOut('GETapi-paket_soal');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-paket_soal"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/paket_soal</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-paket_soal"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-paket_soal"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-paket_soal--nama_paket_soal-">GET api/paket_soal/{nama_paket_soal}</h2>

<p>
</p>



<span id="example-requests-GETapi-paket_soal--nama_paket_soal-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://127.0.0.1:8000/api/paket_soal/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://127.0.0.1:8000/api/paket_soal/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-paket_soal--nama_paket_soal-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-paket_soal--nama_paket_soal-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-paket_soal--nama_paket_soal-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-paket_soal--nama_paket_soal-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-paket_soal--nama_paket_soal-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-paket_soal--nama_paket_soal-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-paket_soal--nama_paket_soal-" data-method="GET"
      data-path="api/paket_soal/{nama_paket_soal}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-paket_soal--nama_paket_soal-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-paket_soal--nama_paket_soal-"
                    onclick="tryItOut('GETapi-paket_soal--nama_paket_soal-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-paket_soal--nama_paket_soal-"
                    onclick="cancelTryOut('GETapi-paket_soal--nama_paket_soal-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-paket_soal--nama_paket_soal-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/paket_soal/{nama_paket_soal}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-paket_soal--nama_paket_soal-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-paket_soal--nama_paket_soal-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>nama_paket_soal</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="nama_paket_soal"                data-endpoint="GETapi-paket_soal--nama_paket_soal-"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
