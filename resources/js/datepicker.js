// @TODO もうちょい軽いライブラリにした方が良いかも
import Pikaday from 'pikaday'

const pikadayConf = {
  toString: function(date, format) {
    const day = ('0' + date.getDate()).slice(-2)
    const month = ('0' + (date.getMonth() + 1)).slice(-2)
    const year = date.getFullYear()
    const result = year + '-' + month + '-' + day
    return result
  },
  i18n: {
    previousMonth: '前月',
    nextMonth: '次月',
    months: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
    weekdays: ['日曜日', '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日'],
    weekdaysShort: ['日', '月', '火', '水', '木', '金', '土']
  }
}

const datepicker = document.querySelectorAll('.js-datepicker')
if (datepicker.length > 0) {
  for (let i = 0; i < datepicker.length; i++) {
    const el = datepicker[i]
    const picker = new Pikaday({
      field: el,
      format: 'YYYY-MM-DD',
      toString: pikadayConf.toString,
      firstDay: 1,
      i18n: pikadayConf.i18n
    })
  }
}
