import Notification from "@typo3/backend/notification.js";

class F7MediaPreview {
    constructor(element) {
        this.element = element;

        this.notificationTitle = document.getElementById('ext_preview__notification-title');
        this.notificationBody = document.getElementById('ext_preview__notification-body');

        this.element.addEventListener('click', (element) => {
            const targetInput = document.getElementById(`input_${this.element.dataset.language}`);
            targetInput.select();
            targetInput.setSelectionRange(0, 99999);
            navigator.clipboard.writeText(targetInput.value);

            Notification.success(this.notificationTitle.innerHTML, this.notificationBody.innerHTML, 5);
        });
    }
}

const elements = document.querySelectorAll('.ext_preview__trigger');
elements.forEach((element) => new F7MediaPreview(element));
