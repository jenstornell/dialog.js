class Dialog {
  init(options) {
    this.o = Object.assign({}, this.defaults(options.type), options);
    this.events();
  }

  defaults() {
  }

  events() {
    this.onClickOpen();
    this.onClickClose();
    this.onClickBackdrop();
  }

  onClickOpen() {
    this.$$('[data-dialog-open]').forEach(el => {
      el.addEventListener('click', (e) => {
        let selector = e.target.dataset.dialogOpen;
        this.open(selector, e.target);
      });
    });
  }

  onClickClose() {
    this.$$('[data-dialog-close]').forEach(el => {
      el.addEventListener('click', (e) => {
        let selector = e.target.dataset.dialogClose;
        this.close(selector, e.target);
      });
    });
  }

  onClickBackdrop() {
    this.$$('dialog').forEach(el => {
      el.addEventListener('click', (e) => {
        if(e.target.nodeName == 'DIALOG') {
          let params = {
            dialog: e.target,
            trigger: e.target,
          }
          e.target.close();

          delete document.body.dataset.dialogOpen;

          this.o.callbacks.close(params);
        }
      });
    });
  }


  open(selector, trigger = null) {
    let dialog = this.$(selector);
    let params = {
      dialog: dialog,
      trigger: trigger,
    };
    dialog.showModal();

    document.body.dataset.dialogOpen = '';

    this.o.callbacks.open(params);
  }


  close(selector, trigger = null) {
    let dialog = this.$(selector);
    let params = {
      dialog: dialog,
      trigger: trigger,
    };
    dialog.close();

    delete document.body.dataset.dialogOpen;

    this.o.callbacks.close(params);
  }

  $(selector) {
    return document.querySelector(selector);
  }

  $$(selector) {
    return document.querySelectorAll(selector);
  }
}

/*
DOCS
Screenshot
*/