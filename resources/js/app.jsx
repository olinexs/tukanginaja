import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client'

createInertiaApp({
  resolve: name => require(`./Pages/${name}`).default,
  setup({ el, App, props }) {
    createRoot(el).render(<App {...props} />)
  },
})
