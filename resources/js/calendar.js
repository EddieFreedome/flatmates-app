import { Calendar } from '@fullcalendar/core'
import dayGridPlugin from '@fullcalendar/daygrid'

const calendarEl = document.getElementById('calendar')
const calendar = new Calendar(calendarEl, {
  plugins: [
    dayGridPlugin
    // any other plugins
  ],
  initialView: 'dayGridMonth',
  weekends: false,
  events: [
    { title: 'Meeting', start: new Date() }
  ]
})

calendar.render()