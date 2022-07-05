let currentScrollY = 0

/**
 * モーダルを開く
 * @param {string} target - 表示するモーダルのID
 */
export function show(target) {
  document.getElementById('js-modal-overlay').classList.add('is-show')

  currentScrollY = window.pageYOffset
  const topPosition = -1 * currentScrollY + 'px'

  const body = document.querySelector('body')

  body.style.position = 'fixed'
  body.style.width = '100%'
  body.style.top = topPosition

  setTimeout(() => {
    document.getElementById(target).classList.add('is-show')
  }, 10)
}

/**
 * モーダルを閉じる
 */
export function close() {
  document.getElementById('js-modal-overlay').classList.remove('is-show')
  document.querySelector('body').setAttribute('style', '')

  scrollTo(0, currentScrollY)

  const modal = document.querySelector('.js-modal.is-show')
  modal.classList.remove('is-show')
}

export function init() {
  const showTrigger = document.querySelectorAll('.js-modal-show')
  const closeTrigger = document.querySelectorAll('.js-modal-close')

  if (showTrigger) {
    for (let i = 0; i < showTrigger.length; i++) {
      const elm = showTrigger[i]
      elm.addEventListener('click', e => {
        const target = e.currentTarget.getAttribute('data-modal')
        show(target)
      })
    }
  }

  if (closeTrigger) {
    for (let i = 0; i < closeTrigger.length; i++) {
      const elm = closeTrigger[i]
      elm.addEventListener('click', () => {
        close()
      })
    }
  }
}
