import flatpickr from "flatpickr";
import('flatpickr/dist/flatpickr.css')
export const picker = (element) => {
    flatpickr(element, {
        dateFormat: "Y-m-d",
        minDate: "today",
    })
}
