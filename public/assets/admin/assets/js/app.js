'use strict';
// Post Json To Server
async function postData(url = '', body = {}) {
   const _token = document.querySelector('[name="_token"]').value;

   try {
      const res = await fetch(url, {
         method: 'POST',
         headers: {
            'X-CSRF-TOKEN': _token,
            'Content-type': 'application/json'
         },
         body: JSON.stringify(body)
      });
      return await res.json();
   } catch (e) {
      console.error('Error:', e.message);
   }

}

$(function() {
   $('[data-toggle="tooltip"]').tooltip()
})

async function deleteRow(id, url) {
   postData(url, {id})
      .then((res) => {
         if (res.status === true) {
            window.location.reload();
         }
      });
}

function editableToggler(target) {
   const parent = target.parentElement.parentElement.parentElement,
         cells = parent.querySelectorAll('[data-redact]');

         target.parentElement.classList.toggle('redact');

   for (const cell of cells) {
         if (target.parentElement.classList.contains('redact')) {
            cell.setAttribute('contenteditable', true);
         } else {
            cell.setAttribute('contenteditable', false);
         }
   }
}

function getParent(target) {
   return target.parentElement.parentElement.parentElement
}

function openModal() {
   const $modal = $('.modal');
   $modal.modal('toggle');
}

function changeTextContent(selector, content) {
   document.querySelector(selector).textContent = content;
}

async function postFormData(url, formData) {
   try {
      const res = await fetch(url, {
         method: 'POST',
         body: formData
      });
      return await res.json();
   } catch (e) {
      console.log('Error Post FormData', e.message);
   }
}

function setAttributeBySelector(selector, attribute, value) {
   document.querySelector(selector).setAttribute(attribute, value);
}
