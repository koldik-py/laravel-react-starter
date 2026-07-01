import { Outlet } from 'react-router-dom'

export function MainLayout() {
  return (
    <div className="app">
      <header className="app__header">
        <strong>PDF Offers</strong>
      </header>

      <main className="app__main">
        <Outlet />
      </main>
    </div>
  )
}
