async function postData(url = '') {
    const response = await fetch(
        url,
        {
            method: 'post',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
        },
    )

    return response.json()
}