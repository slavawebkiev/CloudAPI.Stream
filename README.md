# CloudAPI.Stream
High-quality cloud service for text translation. 100+ Languages <a href="https://cloudapi.stream/" target="_blank">https://cloudapi.stream/</a>
<p><img src="cloudapi.stream.png" alt="Cloud Translation API"></p>
<h2>Class initialization</h2>
<code>
  $CAS = new CAS;
</code>
<h2>Key installation</h2><p>
<code>
  $CAS->set_key('******-*****-*****-*****');
</code></p>
<p>Visit to website <a href="https://cloudapi.stream/dev/sign-in" target="_blank">https://cloudapi.stream/dev/sign-in</a></p>
<h2>Video on YouTube</h2>
<p>https://youtu.be/YPSVJbHkQTc</p>
<h2>Get a list of languages available for translation</h2>
<code>
  $answer = $CAS->langs();
</code>
<h3>Answer</h3>
<p>
<code>
  array(3) {
  ["result"]=>
  bool(true)
  ["langs"]=>
  array(110) {
    ["af"]=>
    string(9) "Afrikaans"
    ["am"]=>
    string(7) "Amharic"
    ["ar"]=>
    string(6) "Arabic"
    ["auto"]=>
    string(15) "Detect Language"
    ["az"]=>
    string(11) "Azerbaijani"
    ["be"]=>...
  </code>
</p>
<h2>Text translation</h2>
<p><code>
  $answer = $CAS->translate('en','fr','Hi bro!');
</code>
</p>
<p><code>
  translate(FROM_LAGUAGE_CODE,TO_LAGUAGE_CODE,TEXT);
</code>
</p>
<h3>Answer</h3>
<p>
<code>
  array(3) {
  ["result"]=>
  bool(true)
  ["text"]=>
  string(15) "Salut mon pote!"
  ["times"]=>
  array(1) {
    ["total_time"]=>
    float(2.0059208869934)
  }
}
  </code>
</p>

<h3>Welcome to our cloud API service for translating text into various languages!</h3>

<p>We offer a simple and effective way to translate text into over 100 languages. Our API service provides a simple interface for integration into your applications and projects.</p>

<p>Our API allows you to translate text into over 100 languages, including English, Russian, German, French, Spanish and many more. Our API provides a fast and secure way to translate text and supports many formats including HTML, XML, JSON and more.</p>

<p>Our API also provides powerful tools for monitoring and analyzing translations, as well as tools for modifying and maintaining translations. Our API makes it easy to integrate translation into your applications and projects, providing a simple and efficient way to translate text into multiple languages.</p>

<p>Join our multilingual text translation cloud API service and get access to powerful tools for text translation and translation analysis. Our API provides a fast and secure way to translate text into multiple languages and supports many formats. Join us right now and start using our API service to translate text into different languages!</p>
<h3>OpenCart Extension based on CloudApi.Stream</h3>
<p>OpenCart 3.x.x.x https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=44906</p>
<p>OpenCart 4.x.x.x https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=44904</p>
