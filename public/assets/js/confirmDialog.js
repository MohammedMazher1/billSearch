/**
 * Represents a confirm dialog.
 */
class ConfirmDialog {
    constructor(options) {
        /**
         * Default options
         */
        const defaultOptions = {
            lang: 'english',
            subtitle: undefined,
        };
        this.options = Object.assign(defaultOptions, options);

        /**
         * The language object containing messages in different languages.
         */
        this.language = {
            english: {
                message: "Confirm this action?",
                ok: "OK",
                cancel: "Cancel"
            },
            spanish: {
                message: "¿Confirmar esta acción?",
                ok: "Aceptar",
                cancel: "Cancelar"
            },
            german: {
                message: "Diese Aktion bestätigen?",
                ok: "OK",
                cancel: "Abbrechen"
            },
            french: {
                message: "Confirmer cette action ?",
                ok: "OK",
                cancel: "Annuler"
            },
            portuguese: {
                message: "Confirmar esta ação?",
                ok: "OK",
                cancel: "Cancelar"
            }
        };
        
        /**
         * The background element of the dialog.
         * @type {HTMLDivElement}
         */
        this.background = document.createElement('div');

        /**
         * The message element of the dialog.
         * @type {HTMLDivElement}
         */
        this.message = document.createElement('div');
        this.message.textContent = this.language[options.lang].message;

        /**
         * The subtitle element of the dialog.
         * @type {HTMLDivElement}
         */
        this.subtitle = document.createElement('div');
        this.subtitle.textContent = options.subtitle ?? '';

        /**
         * The message element of the dialog buttons container.
         * @type {HTMLDivElement}
         */
        this.actions = document.createElement('div');

        /**
         * The confirm button element of the dialog.
         * @type {HTMLButtonElement}
         */
        this.confirmButton = document.createElement('button');
        this.confirmButton.textContent = this.language[options.lang].ok;

        /**
         * The cancel button element of the dialog.
         * @type {HTMLButtonElement}
         */
        this.cancelButton = document.createElement('button');
        this.cancelButton.textContent = this.language[options.lang].cancel;

        /**
         * Styles
         */
        this.background.style.position = 'fixed';
        this.background.style.display = 'flex';        
        this.background.style.justifyContent = 'center';
        this.background.style.alignItems = 'center';
        this.background.style.top = '0';
        this.background.style.left = '0';
        this.background.style.width = '100%';
        this.background.style.height = '100%';
        this.background.style.zIndex = '9999';
        this.background.style.backgroundColor = 'rgba(0, 0, 0, 0.4)';

        this.message.style.boxSizing = 'border-box';
        this.message.style.position = 'relative';
        this.message.style.display = 'flex';
        this.message.style.flexDirection = 'column';
        this.message.style.alignItems = 'center';
        this.message.style.justifyContent = 'center';
        this.message.style.gap = '25px';
        this.message.style.backgroundColor = '#f2f2f2';
        this.message.style.borderRadius = '5px';
        this.message.style.fontSize = '1.4rem';
        this.message.style.width = '350px';
        this.message.style.minHeight = '150px';
        this.message.style.margin = 'auto';
        this.message.style.padding = '30px';
        this.message.style.transition = 'transform 0.3s ease-in-out, opacity 0.3s ease-in-out';
        this.message.style.transform = 'translateY(-25px)';
        this.message.style.opacity = '0.3';

        this.actions.style.display = 'flex';
        this.actions.style.justifyContent = 'end';
        this.actions.style.gap = '15px';
        this.actions.style.marginTop = '10px';

        this.subtitle.style.fontSize = '1.1rem';

        this.confirmButton.style.boxSizing = 'border-box';
        this.confirmButton.style.padding = '8px 16px';
        this.confirmButton.style.borderRadius = '4px';
        this.confirmButton.style.backgroundColor = '#007BFF';
        this.confirmButton.style.color = '#fff';
        this.confirmButton.style.border = 'none';
        this.confirmButton.style.cursor = 'pointer';
        this.confirmButton.style.outline = 'none';
        this.confirmButton.style.fontSize = '1.05rem';

        this.cancelButton.style.boxSizing = 'border-box';
        this.cancelButton.style.padding = '8px 16px';
        this.cancelButton.style.borderRadius = '4px';
        this.cancelButton.style.backgroundColor = '#808080';
        this.cancelButton.style.color = '#fff';
        this.cancelButton.style.border = 'none';
        this.cancelButton.style.cursor = 'pointer';
        this.cancelButton.style.outline = 'none';
        this.cancelButton.style.fontSize = '1.05rem';

        /**
         * Hover effects
         */
        this.confirmButton.addEventListener('mouseover', function() {
            this.style.backgroundColor = '#0056b3'; // darker blue when hovered
        });        
        this.confirmButton.addEventListener('mouseout', function() {
            this.style.backgroundColor = '#007BFF'; // original blue when not hovered
        });

        this.cancelButton.addEventListener('mouseover', function() {
            this.style.backgroundColor = '#5a5a5a'; // darker gray when hovered
        });        
        this.cancelButton.addEventListener('mouseout', function() {
            this.style.backgroundColor = '#808080'; // original gray when not hovered
        }); 
    }

    /**
     * Adds the dialog to the DOM.
     */
    addToDOM() {       
        this.background.appendChild(this.message);
        this.message.appendChild(this.actions);
        this.actions.appendChild(this.cancelButton);
        this.actions.appendChild(this.confirmButton);
        if (this.options.subtitle) {
            this.subtitle.textContent = this.options.subtitle;
            this.message.insertBefore(this.subtitle, this.actions);
        }
        document.body.appendChild(this.background);

        // Trigger the transition by applying a small delay
        setTimeout(() => {
            this.message.style.transform = 'translateY(0px)';
            this.message.style.opacity = '1';
        }, 10);
    }

    /**
     * Shows the dialog and starts the promise.
     */
    show(subtitle) {
        this.options.subtitle = subtitle;
        this.addToDOM();

        return new Promise((resolve, _) => {
            this.confirmButton.addEventListener('click', () => {
                this.resolvePromise(resolve, {
                    ok: true
                });
            });

            this.cancelButton.addEventListener('click', () => {
                this.resolvePromise(resolve, {
                    ok: false
                });
            });
        });
    }

    /**
     * Resolve Promise
     */
    resolvePromise(resolve, status) {
        this.message.style.transform = 'translateY(-25px)';
        this.message.style.opacity = '0.3';
        setTimeout(() => {
            document.body.removeChild(this.background);
            resolve(status);
        }, 300);
    }
}