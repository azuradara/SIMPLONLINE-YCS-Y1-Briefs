async function postData(url = '', data = {}) {
    const response = await fetch(
        url,
        {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: data
        },
    )
1
    return response.json()
}