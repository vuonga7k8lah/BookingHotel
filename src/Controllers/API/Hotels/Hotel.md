# Hotel API

## 1.Get Hotels

### Method:GET

### API endpoint:

https://website.com/BookingHotel/hotels


````ts
export interface Hotels {
    status: 'error' | 'success'
    msg: string
    data: Data[]
    code: number
}

export interface Data {
    tenKS: string
    location:Location
    rooms:Room
    diaChi: string
    tenMien: string
    email: string
    website: string
    createDate: string
}
export interface Room {
    MaPhong: string
    tenPhong: string
    content: string
    gia: string
    image: string[]
    createDate: string
}
export interface Location {
    MaDD: string
    tenDD: string
    content: string
    diaChi: string
    image: string[]
    createDate: string
}
````