class Azura {
    static between = (x, min, max) => {
        return x >= min && x <= max
    }

    static getChecked = el => {
        let r = Array.from(el.querySelectorAll('input[type="radio"]'))
        let res = null

        r.forEach(x => {
            if (x.checked) {
                res = x.value
            }
        })

        return res
    }
}