function clickMe()
    {
         
Swal.fire({
  icon: 'error',
  title: 'Greška..',
  text: 'Ova opcija još uvijek nije dostupna!',
})

}

function noBack() {
  Swal.fire({
    title: 'Da li ste sigurni?',
    text: "Nakon potvrde nema povratka!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Da, siguran sam!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Izbrisano!',
        'Oglas je uspješno uklonjen.',
        'success'
      )
    }
  })
}