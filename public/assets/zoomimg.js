document.querySelector('#gg').addEventListener('click', e => {
    if (e.target.matches('input[type=radio] + label > img')) {
      e.target.parentNode.previousSibling.previousSibling.checked = !e.target.parentNode.previousSibling.previousSibling.checked;
      e.preventDefault();
    }
  });