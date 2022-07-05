'use strict'

import header from './inc/header'
import toast from './inc/toast'
import * as modal from './inc/modal'

header()
toast()

/**
 * モーダル
 */

if (document.getElementById('js-modal-overlay')) modal.init()
