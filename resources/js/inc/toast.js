module.exports = function() {
  const toast = document.getElementById('js-toast')
  const closeBtn = document.getElementById('js-toast-close')

  // トーストを閉じる
  const closeToast = () => {
    toast.classList.add('is-close')
  }

  if (toast) {
    // 5秒でトーストを非表示にする
    document.addEventListener('DOMContentLoaded', () => {
      setTimeout(() => {
        closeToast()
      }, 5000)
    })
    // 閉じるボタンを押した時の挙動
    closeBtn.addEventListener('click', () => {
      closeToast()
    })
  }
}
