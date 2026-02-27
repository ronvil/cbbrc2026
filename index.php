<?php get_header( ); ?>

  <main>
    <div class="container">
      <div class="type">
        <section id="headings">
    <h2>Heading Level 2</h2>
    <p>This paragraph introduces the heading structure. Good typography creates clear hierarchy and visual rhythm across sections.</p>
    
    <h3>Heading Level 3</h3>
    <p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    
    <h4>Heading Level 4</h4>
    <p><em>Italic text</em>, <b>bold text</b>, <u>underlined text</u>, and <mark>highlighted text</mark> should all render distinctly.</p>
    
    <h5>Heading Level 5</h5>
    <p>Inline code such as <code>const example = true;</code> should use a monospace font.</p>
    
    <h6>Heading Level 6</h6>
    <p>Small print example: <small>This is fine print text for disclaimers and metadata.</small></p>
  </section>

  <section id="text">
    <h2>Paragraphs and Inline Elements</h2>
    <p>
      This is a standard paragraph. It contains a 
      <a href="#">sample link</a>, an abbreviation like 
      <abbr title="HyperText Markup Language">HTML</abbr>, 
      and a citation from <cite>A Classic Book</cite>.
    </p>

    <blockquote>
      “Good typography is invisible. When done well, it guides the reader effortlessly through the content.”
      <footer>— <cite>Anonymous Designer</cite></footer>
    </blockquote>

    <p>
      You may also test superscript (E = mc<sup>2</sup>) and subscript (H<sub>2</sub>O).
      Deleted text appears as <del>this mistake</del> and inserted text as <ins>this correction</ins>.
    </p>

    <hr>

    <article>
      <h3>Article Subsection</h3>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra 
        <span class="highlight">highlighted span text</span> nisi at sapien gravida, 
        sed fermentum tortor posuere. Integer nec odio. Praesent libero. 
      </p>
    </article>
  </section>

  <section id="lists">
    <h2>Lists</h2>

    <h3>Unordered List</h3>
    <ul>
      <li>First item</li>
      <li>Second item with <strong>emphasis</strong></li>
      <li>Third item
        <ul>
          <li>Nested item one</li>
          <li>Nested item two</li>
        </ul>
      </li>
    </ul>

    <h3>Ordered List</h3>
    <ol>
      <li>Step one</li>
      <li>Step two</li>
      <li>Step three</li>
    </ol>

    <h3>Description List</h3>
    <dl>
      <dt>Serif</dt>
      <dd>A typeface with small decorative strokes at the ends of letters.</dd>
      <dt>Sans-serif</dt>
      <dd>A typeface without decorative strokes.</dd>
    </dl>
  </section>

  <section id="media">
    <h2>Media and Figures</h2>
    <figure>
      <img src="https://via.placeholder.com/600x300" alt="Placeholder image">
      <figcaption>Figure 1: A sample placeholder image for layout testing.</figcaption>
    </figure>
  </section>

  <section id="tables">
    <h2>Table Example</h2>
    <table>
      <caption>Sample Data Table</caption>
      <thead>
        <tr>
          <th>Item</th>
          <th>Description</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Alpha</td>
          <td>First example entry</td>
          <td>$10.00</td>
        </tr>
        <tr>
          <td>Beta</td>
          <td>Second example entry</td>
          <td>$20.00</td>
        </tr>
        <tr>
          <td>Gamma</td>
          <td>Third example entry</td>
          <td>$30.00</td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td colspan="2">Total</td>
          <td>$60.00</td>
        </tr>
      </tfoot>
    </table>
  </section>

  <section id="forms">
    <h2>Form Elements</h2>
    <form>
      <fieldset>
        <legend>Contact Form</legend>

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email">

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" placeholder="Write your message"></textarea>

        <label>
          <input type="checkbox" name="subscribe">
          Subscribe to newsletter
        </label>

        <button type="submit">Submit</button>
      </fieldset>
    </form>
  </section>
      </div>
    </div>
  </main>

<?php get_footer( ); ?>