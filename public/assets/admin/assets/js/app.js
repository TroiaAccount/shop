'use strict';

async function fetchUrl(url, method, headers, body) {
   const _token = document.querySelector('[name="_token"]').value;

   const res = await fetch(url, {
         method,
         headers: {
            'X-CSRF-TOKEN': _token,
            ...headers
         },
         body
   });
   return await res.json();
}

$(function() {
   $('[data-toggle="tooltip"]').tooltip()
})

async function deleteRow(id, url) {
   const data = {id};
   try {
         const res = await fetchUrl(url, 'POST', {
            'Content-type': 'application/json'
         }, JSON.stringify(data));
         if (res.status === true) {
            location.reload();
         } else {
            alert(res.error);
         }
   } catch (e) {
         console.error('Error:', e.message);
   }
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