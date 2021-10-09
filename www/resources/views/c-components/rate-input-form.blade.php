<style amp-custom>
  .rating {
    --star-size: 2;  /* use CSS variables to calculate dependent dimensions later */
    padding: 0;  /* to prevent flicker when mousing over padding */
    border: none;  /* to prevent flicker when mousing over border */
    unicode-bidi: bidi-override; direction: rtl;  /* for CSS-only style change on hover */
    text-align: left;  /* revert the RTL direction */
    user-select: none;  /* disable mouse/touch selection */
    font-size: 2em;  /* fallback - IE doesn't support CSS variables */
    font-size: calc(var(--star-size) * 1em);  /* because `var(--star-size)em` would be too good to be true */
    cursor: pointer;
    /* disable touch feedback on cursor: pointer - http://stackoverflow.com/q/25704650/1269037 */
    -webkit-tap-highlight-color: rgba(0,0,0,0);
    -webkit-tap-highlight-color: transparent;
    margin-bottom: 1em;
  }
  /* the stars */
  .rating > label {
    display: inline-block;
    position: relative;
    width: 1.1em;  /* magic number to overlap the radio buttons on top of the stars */
    width: calc(var(--star-size) / 2 * 1.1em);
  }
  .rating > *:hover,
  .rating > *:hover ~ label,
  .rating:not(:hover) > input:checked ~ label {
    color: transparent;  /* reveal the contour/white star from the HTML markup */
    cursor: inherit;  /* avoid a cursor transition from arrow/pointer to text selection */
  }
  .rating > *:hover:before,
  .rating > *:hover ~ label:before,
  .rating:not(:hover) > input:checked ~ label:before {
    content: "★";
    position: absolute;
    left: 0;
    color: black;
  }
  .rating > input {
    position: relative;
    transform: scale(3);  /* make the radio buttons big; they don't inherit font-size */
    transform: scale(var(--star-size));
    /* the magic numbers below correlate with the font-size */
    top: -0.5em;  /* margin-top doesn't work */
    top: calc(var(--star-size) / 6 * -1em);
    margin-left: -2.5em;  /* overlap the radio buttons exactly under the stars */
    margin-left: calc(var(--star-size) / 6 * -5em);
    z-index: 2;  /* bring the button above the stars so it captures touches/clicks */
    opacity: 0;  /* comment to see where the radio buttons are */
    font-size: initial; /* reset to default */
  }
  form.amp-form-submit-error [submit-error] {
    color: red;
  }
</style>
Rate:
<fieldset class="rating">
    <input name="rating" type="radio" id="rating5" value="5" on="change:rating.submit">
    <label for="rating5" title="5 stars">☆</label>

    <input name="rating" type="radio" id="rating4" value="4" on="change:rating.submit">
    <label for="rating4" title="4 stars">☆</label>

    <input name="rating" type="radio" id="rating3" value="3" on="change:rating.submit">
    <label for="rating3" title="3 stars">☆</label>

    <input name="rating" type="radio" id="rating2" value="2" on="change:rating.submit">
    <label for="rating2" title="2 stars">☆</label>

    <input name="rating" type="radio" id="rating1" value="1" on="change:rating.submit">
    <label for="rating1" title="1 stars">☆</label>
</fieldset>
