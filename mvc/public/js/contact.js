;(() => {
  const $ = document.querySelectorAll.bind(document)
  const $$ = document.querySelector.bind(document)

  $$('.button-contact').addEventListener('click', () => {
	  //alert("ok");
    $$('#contact-modal').classList.add('is-active')
  })

  $('.modal-background, .button-close').forEach((element) => {
    element.addEventListener('click', () => {
      $('.modal.is-active').forEach((e) => e.classList.remove('is-active'))
    })
  })

  const validateForm = (formId) => (event) => {
    event.preventDefault()
    const form = $$('#' + formId)
    const contentInput = form.content
    if (contentInput.value.length < 10) {
      contentInput.classList.add('is-danger')
      form.querySelector('.help').classList.remove('is-hidden')
    } else {
      form.submit()
    }
  }

  const btnReviewSubmit = $$('.button-review-submit')
  btnReviewSubmit.addEventListener('click', validateForm('review-form'))

  function onReviewCaptchaSuccess() {
    btnReviewSubmit.removeAttribute('disabled')
  }
  window.onReviewCaptchaSuccess = onReviewCaptchaSuccess
})()
