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
        let dialog = this.$(selector);
        let params = {
          dialog: dialog,
          trigger: e.target,
        };
        dialog.showModal();

        document.body.dataset.dialogOpen = '';

        this.o.callbacks.open(params);
      });
    });
  }

  onClickClose() {
    this.$$('[data-dialog-close]').forEach(el => {
      el.addEventListener('click', (e) => {
        let selector = e.target.dataset.dialogClose;
        let dialog = this.$(selector);
        let params = {
          dialog: dialog,
          trigger: e.target,
        };
        dialog.close();

        delete document.body.dataset.dialogOpen;

        this.o.callbacks.close(params);
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