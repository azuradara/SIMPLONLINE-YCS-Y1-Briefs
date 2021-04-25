class Rates {

    static data = {}

    static refresh() {
        postData('/rates').then(res => {
            let d = res.data

            Rates.tax_single = d.tax_single
            Rates.tax_double = d.tax_double
            Rates.tax_view = d.tax_view
            Rates.tax_baby_bed = d.tax_baby_bed
            Rates.tax_child_bed = d.tax_child_bed
            Rates.tax_teen_bed = d.tax_teen_bed
            Rates.tax_pension_semi = d.tax_pension_full

            Rates.rates_id = d.rates_id
        })
    }
}

Rates.refresh()