import {render, screen, cleanup} from "@testing-library/user-event"
import Navbar from "../Navbar"
test('navbar test', () => {
    render(<Navbar/>);
    const navbarElement = screen.getByTestId('navbar-1');
    expect(navbarElement).toBeInTheDocument();
})