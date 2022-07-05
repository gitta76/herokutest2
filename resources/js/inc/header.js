module.exports = function() {
  const bodyId = document.querySelector('body').getAttribute('id')
  const headerNav = document.querySelectorAll('#js-header-nav > li > a')

  for (let i = 0; i < headerNav.length; i++) {
    var el = headerNav[i]
    if (bodyId === el.dataset.current) el.classList.add('is-current')
  }
}
