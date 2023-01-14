<style>
  /* add some styling to make it look nice */
  .radio-form {
    display: flex;
    flex-direction: column;
  }
  .radio-form label {
    font-size: 18px;
    margin-bottom: 8px;
  }
  .radio-form input[type="radio"] {
    margin-right: 8px;
  }
</style>
<form class="radio-form">
  <label>
    <input type="radio" name="test" value="option-1" checked> Option 1
  </label>
  <label>
    <input type="radio" name="test" value="option-2"> Option 2
  </label>
  <label>
    <input type="radio" name="test" value="option-3"> Option 3
  </label>
  <input type="submitp" name="" id="">
</form>
<script>
  // get a reference to the form element
  const form = document.querySelector('.radio-form');

  // create an array to store the selected values
  let selectedValues = [];

  // check if there is already a stored array in localStorage
  if (localStorage.getItem('selectedValues')) {
    // if there is, use that array
    selectedValues = JSON.parse(localStorage.getItem('selectedValues'));
  }

  // listen for the submit event on the form
  form.addEventListener('submit', (event) => {
    // prevent the form from actually submitting
    event.preventDefault();

    // get all the radio buttons in the form
    const radios = form.querySelectorAll('input[type="radio"]');

    // loop through the radio buttons
    for (const radio of radios) {
      // if the radio button is checked, add its value to the array
      if (radio.checked) {
        selectedValues.push(radio.value);
      }
    }

    // store the updated array in localStorage
    localStorage.setItem('selectedValues', JSON.stringify(selectedValues));

    // log the array to the console (for testing purposes)
    console.log(selectedValues);
  });
</script>