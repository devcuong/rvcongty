;(() => {
  const $ = document.querySelectorAll.bind(document)
  const $$ = document.querySelector.bind(document)

  $('.button-contact').forEach((element) => {
    element.addEventListener('click', () => {
      const data = element.dataset;
      const phoneReviewer = data.phone;
      jQuery('#contact-id').html(phoneReviewer);
      const commentModal = $$('#contact-modal');
      commentModal.classList.add('is-active');

      
//      const prefillContent = data.prefill
//      const reaction = data.reaction
//
//      const idInput = $$('#review-id')
//      const reviewContent = $$('#review-content')
//      const reviewReaction = $$('#review-reaction')
//
//      idInput.value = reviewId
//      reviewContent.value = prefillContent
//      reviewReaction.value = reaction
    })
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

  const btnCommentSubmit = $$('.button-comment-submit')
  btnCommentSubmit.addEventListener('click', validateForm('comment-form'))

  function onCommentCaptchaSuccess() {
    btnCommentSubmit.removeAttribute('disabled')
  }

  window.onCommentCaptchaSuccess = onCommentCaptchaSuccess
})()
