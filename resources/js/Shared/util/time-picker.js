import flatpickr from "flatpickr";
import('flatpickr/dist/flatpickr.css')
export const time_picker = (element) => {
    flatpickr(element, {
        enableTime: true,
        noCalendar: true,
        dateFormat: "H:i",
    })
}
