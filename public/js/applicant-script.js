const visaEl = document.getElementById("visa-process-steps")

const visaProcess = [
    {
        id: 1,
        stepName: "Choose Your Visa Type",
        stepDescription: "Select the visa type that best suits your travel purpose, whether it’s for tourism, business, or study. Our easy-to-use platform helps you find the right visa quickly."
    },
    {
        id: 2,
        stepName: "Fill Out the Application",
        stepDescription: "Complete our simplified online application form with your personal details and travel information. The form is secure, and your data is protected."
    },
    {
        id: 3,
        stepName: "Upload Required Documents",
        stepDescription: "Upload all necessary documents, such as your passport, photograph, and supporting documents. Our document checklist makes it easy to ensure nothing is missed."
    },
    {
        id: 4,
        stepName: "Make Payment",
        stepDescription: "Pay the visa application fee securely online. Multiple payment options are available for your convenience."
    },
    {
        id: 5,
        stepName: "Track Your Application",
        stepDescription: "Receive real-time updates and track your visa application status from submission to approval."
    },
    {
        id: 6,
        stepName: "Receive Your Visa",
        stepDescription: "Get your visa delivered to your email or address. Start preparing for your journey!"
    }
]


visaProcess.map((val, key) => {
    visaEl.innerHTML +=
        `
        <div class="border-t-1 border-x-1 border-b-4 p-5 rounded-md bg-gray-200 shadow-md">
            <h3 class="text-2xl font-medium">Step ${val.id}: ${val.stepName}</h3>
            <p class="text-sm font-light">${val.stepDescription}</p>
        </div>
    `
})

const visaCategories = [
    {
        id: 1,
        visaName: "Tourist Visa",
        imgAdd: "images/touristVisa.png"
    },
    {
        id: 2,
        visaName: "Student Visa",
        imgAdd: "images/studentVisa.webp"
    },
    {
        id: 3,
        visaName: "Work Visa",
        imgAdd: "images/workVisa.png"
    },
    {
        id: 4,
        visaName: "Business Visa",
        imgAdd: "images/businessVisa.jpg"
    },
    {
        id: 5,
        visaName: "Family/Visit Visa",
        imgAdd: "images/visitVisa.png"
    },
    {
        id: 6,
        visaName: "Transit Visa",
        imgAdd: "images/transitVisa.png"
    }
]

const visaCategoryEl = document.getElementById("visa-categories")

visaCategories.map((val, key) => {
    visaCategoryEl.innerHTML +=
    `
    <div class="text-center">
        <img src=${val.imgAdd} alt=${val.visaName} class="h-12 mx-auto mb-2">
        <h4 class="font-medium text-md">${val.visaName}</h4>
    </div>
    `
})

